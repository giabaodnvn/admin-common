<?php
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use \Spatie\Permission\Models\Permission;

class PermissionRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Permission::class;
    }
}