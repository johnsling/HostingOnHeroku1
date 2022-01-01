<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{

    public function index ()
    {
        return view('posts.home');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        $home = Home::create([
            'image_path' => $newImageName
        ]);

        return redirect('home');
    }


}



