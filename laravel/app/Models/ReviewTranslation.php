<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewTranslation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'review_translations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'content', 'locale', 'description', 'slug', 'review_id'];
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the validation rules that apply to the request.
     *
    */
    public static $rules = [
        'name' => 'required|unique:category_translations',
        'slug' => 'required|unique:category_translations',
        'link' => 'required_if:locale,vn|url',
        'description' => 'required|string|min:5',
        'content' => 'required|string|min:5',
        'logo' => 'required_if:locale,vn'
    ];
}
