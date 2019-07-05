<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('welcome' , [
            'newvar' => 'something new',
            'title' => 'Delicious Pizza - My Food Stop',
            'request' => request()->all()
        ]);
    }

    public function about(){
        return view('about' , [
            'newvar' => 'something new',
            'title' => 'About',
            'request' => request()->all()
        ]);
    }

    public function contact(){
        return view('contact' , [
            'newvar' => 'something new',
            'title' => request('title'),
            'request' => request()->all()
        ]);
    }
}
