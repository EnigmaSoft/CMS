<?php

namespace App\Http\Controllers;

use App\News as Model;
use Illuminate\Http\Request;

class News extends Controller
{

    protected static $states = ['', 'Updated', 'Complete'];

    protected static $categories = [
        10 => 'General',
        20 => 'Update',
        30 => 'Notice',
        40 => 'Event',
        50 => 'Maintenance',
        60 => 'Promotion',
        1337 => 'Error',
    ];

    protected static $theme = [
        10 => 'warning',
        20 => 'primary',
        30 => 'info',
        40 => 'success',
        50 => 'danger',
        60 => 'purple',
        1337 => 'default',
    ];

    protected static $general = 10;
    protected static $update = 20;
    protected static $notice = 30;
    protected static $event = 40;
    protected static $maintenance = 50;
    protected static $promotion = 60;
    protected static $error = 1337;

    public static function getGeneral()
    {
        return static::$general;
    }

    public static function getUpdate()
    {
        return static::$update;
    }

    public static function getNotice()
    {
        return static::$notice;
    }

    public static function getEvent()
    {
        return static::$event;
    }

    public static function getMaintenance()
    {
        return static::$maintenance;
    }

    public static function getPromotion()
    {
        return static::$promotion;
    }

    public static function getError()
    {
        return static::$error;
    }

    public static function sortCat(int $category)
    {
        return isset(static::$categories[$category]) ? static::$categories[$category] : static::$categories[static::getError()];
    }

    public static function sortState(int $state)
    {
        if (!$state)
        {
            return false;
        }
        return isset(static::$states[$state]) ? static::$states[$state] : false;
    }

    public static function getTheme($category)
    {
        return isset(static::$theme[$category]) ? static::$theme[$category] : static::$theme[static::getError()];
    }

    public static function verbaliseCategories($articles = [])
    {
        foreach ($articles as $article)
        {
            $article->vcategory = static::sortCat($article->category);
        }
        return $articles;
    }

    public static function getLatest()
    {
        return Model::latest()
            ->limit(5)
            ->get();
    }

    public static function getFeatured()
    {
        return Model::Featured()
            ->latest()
            ->limit(3)
            ->get();
    }

}
