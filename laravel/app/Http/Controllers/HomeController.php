<?php

namespace App\Http\Controllers;

use App\Models\CategoryTranslation;
use Illuminate\Http\Request;
use App\Repositories\CategoryRepository;
use App\Repositories\PostRepository;
use App\Repositories\TagRepository;
use App\Repositories\PostTranslationRepository;
use App\Repositories\CategoryTranslationRepository;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use App\Models\PostTranslation;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * @var PostRepository
     */
    private $postRepository;

    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    /**
     * @var PostTranslationRepository
     */
    private $postTranslationRepository;

    /**
     * @var CategoryTranslationRepository
     */
    private $categoryTranslationRepository;

    /**
     *  HomeController constructor
     */
    public function __construct(PostRepository $postRepo, CategoryRepository $categoryRepo, TagRepository $tagRepo, PostTranslationRepository $postTranslationRepo, CategoryTranslationRepository $categoryTranslationRepo)
    {
        $this->postRepository = $postRepo;
        $this->categoryRepository = $categoryRepo;
        $this->tagRepository = $tagRepo;
        $this->postTranslationRepository = $postTranslationRepo;
        $this->categoryTranslationRepository = $categoryTranslationRepo;
    }
    
    public function index()
    {
        $locale = App::getLocale();
        $featuredPosts = $this->postRepository->with(['category'])->scopeQuery(function($query) {
            return $query->where([['featured', 'on'],['status', 0]])->orderBy('created_at','desc')->take(4);
        })->get();
        foreach($featuredPosts as $featuredPost) {
            $featuredPost->setDefaultLocale($locale);
            if(!empty($featuredPost->category)){
                foreach($featuredPost->category as $category) {
                    $category->setDefaultLocale($locale);
                }
            }
        }
        $featuredPostsId = $featuredPosts->pluck('id')->toArray();

    	// $investmentPosts = $this->postRepository->whereHas('category', function($query) {
    	// 	$query->where('id', 7)->orderBy('id');
    	// })->take(5)->get();
        
        // $menus = $this->categoryRepository->with(['subCategories'])->whereNull('parent_id')->get();

        $latestPosts = $this->postRepository->with('category')->scopeQuery(function($query)  {
            return $query->where('status',0)->orderBy('created_at','desc')->take(8);
        })->get();

        foreach($latestPosts as $item) {
            $item->setDefaultLocale($locale);
            if(!empty($item->category)){
                foreach($item->category as $category) {
                    $category->setDefaultLocale($locale);
                }
            }
        }

        // $tradePosts = $this->postRepository->whereHas('category', function($query) {
    	// 	$query->where('id', 8)->orderBy('id');
    	// })->get();

        $reviewPosts = $this->postRepository->whereHas('category', function($query) {
    		$query->where('categories.id', 7)->orderBy('posts.id');
    	})->take(4)->get();

        foreach($reviewPosts as $item) {
            $item->setDefaultLocale($locale);
        }
    
        $mostPopulars = $this->postRepository->with('category')->scopeQuery(function($query){
            return $query->where('status', 0)->orderBy('view_count','desc')->take(3);
        })->get();

        foreach($mostPopulars as $item) {
            $item->setDefaultLocale($locale);
            if(!empty($item->category)){
                foreach($item->category as $category) {
                    $category->setDefaultLocale($locale);
                }
            }
        }

        return view('index', compact(['featuredPosts', 'latestPosts', 'mostPopulars','reviewPosts']));
    }

    /**
     * Get posts detail
     */
    public function postDetail(Request $request)
    {
        $locale = App::getLocale();
        $post = $this->postRepository->with(['category', 'tag'])->scopeQuery(function($query) use ($request) {
            return $query->select("post_translations.title as title", "post_translations.content as content", "post_translations.description as description", "post_translations.post_id as id",
                    "posts.created_at as created_at","posts.author as author", "posts.image as image", "posts.view_count as view")
                    ->leftJoin("post_translations", "posts.id", "=", "post_translations.post_id")
                    ->where("post_translations.slug", $request->post);
        })->get();
        foreach($post as $item) {
            $item->setDefaultLocale($locale);
            if(!empty($item->category)){
                foreach($item->category as $category) {
                    $category->setDefaultLocale($locale);
                }
            }
        }

        $postId = $this->getPostIdBySlug($request->post);

        $recentPosts = $this->postRepository->with('category')->scopeQuery(function($query) use ($postId, $locale) {
            return $query->select("post_translations.title as title", "post_translations.post_id as id",
                    "posts.created_at as created_at","posts.author as author", "posts.image as image")
                    ->leftJoin("post_translations", "posts.id", "=", "post_translations.post_id")
                    ->where([["posts.status",0],["post_translations.locale", $locale]])->whereNotIN('post_translations.post_id',[$postId])->orderby('posts.created_at','desc')->take(2);
        })->get();

        foreach($recentPosts as $item) {
            $item->setDefaultLocale($locale);
            if(!empty($item->category)){
                foreach($item->category as $category) {
                    $category->setDefaultLocale($locale);
                }
            }
        }
        return view('detail', compact(['post','recentPosts']));
    }

    /**
     * Get posts by category
     */
    public function getPostByCategory(Request $request)
    {
        $locale = App::getLocale();
        $categoryName = $this->getCategoryNameBySlug($request->category);
        $categoryId = $this->getCategoryIdBySlug($request->category);
        $posts = $this->postRepository->whereHas('category', function($query) use ($categoryId) {
            $query->where('categories.id', $categoryId);
        })->get();
        foreach($posts as $post) {
            $post->setDefaultLocale($locale);
        }

        return view('category', compact('posts', 'categoryName'));
    }


    public function getPostByTag(Request $request)
    {
        $tag = $this->tagRepository->findBySlug($request->tag);
        $posts = $this->postRepository->whereHas('tag', function($query) use ($tag) {
            $query->where('id', $tag->id);
        })->get();
        return view('tag', compact(['tag', 'posts']));
    }
    public function error()
    {
        return view('404');
    }

    /**
     * Change language
     * @var $language
     */
    public function changeLanguage($lang)
    {
        return redirect()->route('web.index', $lang);
    }

    private function getPostIdBySlug($slug)
    {
        $post = $this->postTranslationRepository->findByField('slug', $slug);
        foreach($post as $item) {
            $postId = $item->post_id;
        }
        return $postId;
    }

    private function getCategoryIdBySlug($slug)
    {
        $category = $this->categoryTranslationRepository->findByField('slug', $slug);
        foreach($category as $item) {
            $categoryId = $item->category_id;
        }
        return $categoryId;
    }

    private function getCategoryNameBySlug($slug)
    {
        $locale = App::getLocale();
        $category = $this->categoryTranslationRepository->where([['slug', $slug],['locale',$locale]])->get();
        foreach($category as $item) {
            $categoryName = $item->name;
        }
        return $categoryName;
    }
}
