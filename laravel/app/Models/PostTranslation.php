<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class PostTranslation extends Model
{
    use HasFactory, Sluggable, SluggableScopeHelpers;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'post_translations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content','description', 'slug', 'post_id', 'locale'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Get the validation rules that apply to the request.
     *
    */
    public static $rules = [
        'title' => 'required|string|min:5',
        'slug' => 'required|min:5',
        'description' => 'required|string|min:5',
        'content' => 'required|string|min:5',
    ];
}
