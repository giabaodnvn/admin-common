<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Category extends Model implements TranslatableContract
{
    use HasFactory, Sluggable, SluggableScopeHelpers, Translatable;

    /**
     * The attributes contains the names of the fields being translated
     *
     * @var array
     */
    public $translatedAttributes = ['name','description', 'slug'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['parent_id', 'status'];

    /**
     * Get all of the categories for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    /**
     * Get all of the children categories for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subCategories()
    {
        return $this->categories()->with('categories');
    }

    public function getTranslations($locale = 'en')
    {
        return $this->subCategories()->where('locale', $locale);
    }

    /**
     * Get the validation rules that apply to the request.
     *
    */
    public static $rules = [
        'name' => 'required|string|unique:categories|min:3'
    ];

    // public function parent()
    // {
    //     return $this->belongsTo(Category::class);
    // }

    // public function childs()
    // {
    //     return $this->hasMany(Category::class, 'parent_id');
    // }
    
    // public function allParents()
    // {
    //     return $this->parent()->with('allParents');
    // }

    // public function allChilds()
    // {
    //     return $this->childs()->with('allChilds');
    // }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
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
}
