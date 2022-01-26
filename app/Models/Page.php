<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Models\Page As VoyagerPageModel;
use TCG\Voyager\Traits\Translatable;

class Page extends VoyagerPageModel
{
    use HasFactory, Translatable;
    protected $translatable = ['title','body', 'excerpt'];
    public static function findBySlug($slug){
        return static::withTranslations(Session::get('locale'))->where('slug', $slug)->first();
    }
}
