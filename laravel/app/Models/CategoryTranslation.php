<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'category_translations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description', 'slug', 'category_id', 'locale'];

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
        'description' => 'nullable|string|min:5',
    ];
}
