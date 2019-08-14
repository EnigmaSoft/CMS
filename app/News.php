<?php

namespace App;

use App\Http\Controllers\News as Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{

    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'web_news';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'slug';
    
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'description', 'content', 'author',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    
    /**
     * Scope a query to only include general articles.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    /*public function bySlug($slug)
    {
        return $this->where('slug', $slug);
    }*/


    /**
     * Scope a query to only include general articles.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    /*public function byCategory($category)
    {
        return $this->where('category', $category);
    }*/

    
    /**
     * Scope a query to only include general articles.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeGeneral($query)
    {
        return $query->where('category', Controller::getGeneral());
    }


    /**
     * Scope a query to only include update articles.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUpdate($query)
    {
        return $query->where('category', Controller::getUpdate());
    }


    /**
     * Scope a query to only include notice articles.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNotice($query)
    {
        return $query->where('category', Controller::getNotice());
    }


    /**
     * Scope a query to only include event articles.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeEvent($query)
    {
        return $query->where('category', Controller::getEvent());
    }


    /**
     * Scope a query to only include maintenance articles.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeMaintenance($query)
    {
        return $query->where('category', Controller::getMaintenance());
    }


    /**
     * Scope a query to only include promotion articles.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePromotion($query)
    {
        return $query->where('category', Controller::getPromotion());
    }


    /**
     * Scope a query to only include featured articles.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }
}
