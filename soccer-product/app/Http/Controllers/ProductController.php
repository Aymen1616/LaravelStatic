<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home()
    {
        // Affiche la page d'accueil
        return view('home');
    }

    public function show()
    {
        // Affiche la page des produits
        return view('products');
    }

    public function contact()
    {
        // Affiche la page de contact
        return view('contact');
    }

    public function about()
    {
        // Affiche la page "à propos"
        return view('about');
    }
}
