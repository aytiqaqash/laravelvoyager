<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class PageController extends VoyagerBaseController
{
    public function pageView($slug){
        $page = Page::findBySlug($slug);
        if($page == null ){
            return view('welcome');
        }
        $locale = Session::get('locale');
        return view('dinamic', compact('page','locale'));
    }
}
