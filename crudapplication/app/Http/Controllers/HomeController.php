<?php

namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function add_movie(){
    $data= Page::add_movie ();
    return view('add_movie',['data'=>$data]);
}

}