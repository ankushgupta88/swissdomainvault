<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class ServiceCat extends Model
{
    use HasFactory,HasSlug;

    protected $table = 'service_category';

    protected $fillable = ['name', 'slug', 'description','short_desc','price','status','is_featured'];
    
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
    
    //Get services according to category id
    public function serviceList() {
         return $this->hasMany(Service::class, 'service_category_id');
    } 
}
