<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        
        return view('index');
    }
    public function abouts()
    {
        $title = 'welcome to laravel';

        // return view('about',compact('title'));
        return view('abouts')->with('title',$title);
    }

    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['web','programming','seo']
        );
        
        return view('services')->with($data);
        
    }
}
