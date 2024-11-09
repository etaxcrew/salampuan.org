<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        //berita
        $berita = Post::with('category')->orderBy('id', 'DESC')->take(3)->get();

        return view('front.index', compact('berita'));
    }

    public function details(Post $post)
    {
        return view('front.details', [
            'post' => $post,
        ]);
    }

    public function profil()
    {

        return view('front.profil');
    }
}
