<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Service extends Model
{
    use HasFactory,HasSlug;

    protected $table = 'services';

    protected $fillable = ['name', 'slug', 'description','short_desc','price','status','service_category_id', 'is_popular'];
    
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
    
    //Get category details according to category id
    public function categoryDetails() {
        return $this->belongsTo(ServiceCat::class, 'service_category_id');
    }
}
