<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $data['posts'] = Post::orderBy('id', 'desc')->paginate(5);

    //     return view('posts.home', $data);
    // }
    public function index()
    {
        return view('posts.home');
    }
}
