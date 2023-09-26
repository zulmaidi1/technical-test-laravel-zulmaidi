<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Service;

class WelcomeController extends Controller
{
    public function index(Request $request){
        $products = Product::limit(10)->get();

        $services = Service::limit(10)->get();

        return view('welcome', compact('products', 'services'));
    }
}
