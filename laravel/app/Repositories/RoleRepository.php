<?php
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use \Spatie\Permission\Models\Role;

class RoleRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Role::class;
    }
}