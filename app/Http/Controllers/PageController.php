<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class PageController extends VoyagerBaseController
{
    public function pageView($slug){
        $page = Page::findBySlug($slug);
        if($page == null ){
            return view('welcome');
        }
        return view('dinamic', compact('page'));
    }
}
