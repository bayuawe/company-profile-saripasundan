<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Category;
use App\Models\Media;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('front.index', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function details(Product $product)
    {
        $other_products = Product::where('id', '!=', $product->id)->get();
        $creator_id = $product->creator_id;
        $creator_products = Product::where('creator_id', $creator_id)->get();
        return view('front.details', [
            'product' => $product,
            'other_products' => $other_products,
            'creator_products' => $creator_products
        ]);
    }

    public function category(Category $category)
    {
        $product_categories = Product::where('category_id', $category->id)->get();
        return view('front.category', [
            'category' => $category,
            'product_categories' => $product_categories
        ]);
    }

    function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $keywordLower = strtolower($keyword); // Mengonversi input pencarian menjadi huruf kecil

        $products = Product::query()
            ->whereRaw('LOWER(name) LIKE ?', ['%' . $keywordLower . '%']) // Menggunakan LOWER() untuk membandingkan nilai kolom dalam huruf kecil
            ->orWhereHas('category', function ($query) use ($keywordLower) {
                $query->whereRaw('LOWER(name) LIKE ?', ['%' . $keywordLower . '%']); // Menggunakan LOWER() untuk membandingkan nilai kolom dalam huruf kecil
            })
            ->get();

        return view('front.search', [
            'products' => $products
        ]);
    }

    public function about()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('front.about', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function career()
    {
        $careers = Career::all();
        return view('front.career', [
            'careers' => $careers
        ]);
    }

    public function career_details(Career $career)
    {
        $other_careers = Career::where('id', '!=', $career->id)->get();
        return view('front.career_details', [
            'career' => $career,
            'other_careers' => $other_careers
        ]);
    }

    public function certificate()
    {
        return view('front.certificate');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function breadcrumbs()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('front.category', [
            'products' => $products,
            'categories' => $categories
        ]);
    }
}
