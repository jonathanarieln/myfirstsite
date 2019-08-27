<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
     public function home()
    {

      return view('home',[
        'tasks'=>[
          'Go to Metropolis',
          'Go to University',
          'Go Home',
          'Go to Sleep',
         ],
         'regard'=>'Welcome to my home',
      ]);
    }

     public function contact()
     {
       return view('contact');
     }

     public function about()
    {

      return view('about');
    }
}
