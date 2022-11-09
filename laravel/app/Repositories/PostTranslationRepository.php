<?php
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class PostTranslationRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\\Models\\PostTranslation";
    }

    function getIdBySlug($slug)
    {
        $data = $this->model->where('slug',$slug);
        return $data;
    }
}