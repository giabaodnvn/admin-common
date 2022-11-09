<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\PostTranslation;
use App\Models\Category;
use App\Models\Tag;

class Post extends Model implements TranslatableContract
{
    use HasFactory, SoftDeletes, Translatable;

    /**
     * The attributes contains the names of the fields being translated
     *
     * @var array
     */
    public $translatedAttributes = ['title', 'content','description', 'slug'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['author', 'status','image', 'featured'];

    /**
     * The Posts that belong to the category.
     */
    public function category()
    {
    	return $this->belongstoMany(Category::class, 'post_has_category', 'post_id','category_id');
    }

    /**
     * The Posts that belong to the tag.
     */
    public function tag()
    {
        return $this->belongstoMany(Tag::class, 'post_has_tag', 'post_id','tag_id');
    }

    public function getCreatedAtAttribute($value)
    {
        if (!empty($value)) {
            return date('Y-m-d', strtotime($value));
        }
    }
}
