<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index () {
        return view('front.product.index');
    }

    public function detail (string $id) {
        return view('front.product.detail');
    }

    public function compare () {
        return view('front.product.compare');
    }

    public function wishlist () {
        return view('front.product.wishlist');
    }
}
