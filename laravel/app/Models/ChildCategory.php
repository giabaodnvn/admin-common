<?php

namespace App\Models;

use App\Models\Category;

class ChildCategory extends Category 
{
    protected $table = 'categories';

    protected $translationForeignKey = 'category_id';
}