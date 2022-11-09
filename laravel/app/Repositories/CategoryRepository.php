<?php
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class CategoryRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\\Models\\Category";
    }

    function findBySlug($slug)
    {
        return $this->model->findBySlug($slug);
    }
}