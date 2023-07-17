<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\CategoryProduct;
use App\Models\Chef;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Hero;
use App\Models\ImageHero;
use App\Models\Post;
use App\Models\Product;
use App\Models\SpesialRecipe;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $heroTitle = Hero::get();
        $heroImage = ImageHero::get();
        $specialRecipe = SpesialRecipe::get();
        $galleries = Gallery::get();
        $chefs = Chef::get();
        $about = About::where('id', 1)->first();
        $events = Event::where('tanggal', '>=' , Carbon::now())->take(3)->get();
        $news = Post::publish()->latest()->take(3)->get();
        $categoryProduct = CategoryProduct::all();
        return view('index', compact('galleries','events','heroTitle','heroImage','chefs','categoryProduct','about','specialRecipe','news'));
    }
}
