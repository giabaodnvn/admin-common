<?php
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class PostRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\\Models\\Post";
    }

    function findBySlug($slug)
    {
        $post = $this->model->findBySlug($slug);
        return $this->model->with(['category', 'tag'])->find($post->id);
    }

    function getRelatedPost($slug)
    {
        $post = $this->model->findBySlug($slug);
        $categoryIds = $post->category->pluck('id')->toArray();
        return $this->model->whereHas('category', function($query) use ($categoryIds) {
            $query->whereIn('id', $categoryIds);
        })->whereNotIN('id', [$post->id])->take(4)->get();
    }

    function getRecentPosts($slug)
    {
        $post = $this->model->findBySlug($slug);
        return $this->model->with('category')->whereNotIn('id',[$post->id])->orderBy('created_at','desc')->take(4)->get();
    }
}