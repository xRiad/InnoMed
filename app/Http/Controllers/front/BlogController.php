<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index () {
        return view('front.blog.index');
    }

    public function detail (string $id) {
        return view('front.blog.detail');
    }
}
