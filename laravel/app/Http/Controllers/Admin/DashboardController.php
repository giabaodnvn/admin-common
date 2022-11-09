<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\PostRepository;
use App\Repositories\ReviewRepository;

class DashboardController extends Controller
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * @var PostRepository
     */
    private $postRepository;

    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    /**
     * @var ReviewRepository
     */
    private $reviewRepository;

    /**
     *  HomeController constructor
     */
    public function __construct(PostRepository $postRepo, CategoryRepository $categoryRepo, ReviewRepository $reviewRepo, UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
        $this->postRepository = $postRepo;
        $this->categoryRepository = $categoryRepo;
        $this->reviewRepository = $reviewRepo;
    }

    public function index()
    {
        $userCount = $this->userRepository->count();
        $postCount = $this->postRepository->count();
        $categoryCount = $this->categoryRepository->count();
        $reviewCount = $this->reviewRepository->count();

        return view('admin.dashboard', compact('userCount', 'postCount', 'categoryCount', 'reviewCount'));
    }
}
