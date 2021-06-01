<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index(){
       $title = 'Welcome to laravel';
       return view ('pages.index', compact('title'));
   }

   public function about(){
       $title = 'About us';
       return view('pages.about',compact('title'));
   }

   public function services(){
       $title = 'Our Services';
    return view ('pages.services') -> with('title',$title);
}

}
