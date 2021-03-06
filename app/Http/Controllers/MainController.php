<?php

namespace App\Http\Controllers;

use App\Models\ReviewModel;
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

    public function review()
    {
        $reviews = new ReviewModel();
        return view('review', ['reviews' => $reviews->all()]);
    }

    public function review_check(Request $request)
    {
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'name' => 'required|min:4|max:100',
            'review' => 'required|min:|max:200'
        ]);  

        $review = new ReviewModel();
        $review->email = $request->input('email');
        $review->name = $request->input('name');
        $review->review = $request->input('review');

        

        $review->save();

       
        return redirect('review');
    }
}
