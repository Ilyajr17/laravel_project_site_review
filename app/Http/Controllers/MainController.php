<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function review(Request $request)
    {
        return view('review');
    }

    public function review_check(Request $request)
    {
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'name' => 'required|min:4|max:100',
            'review' => 'required|min:|max:200'
        ]);  
    }
}
