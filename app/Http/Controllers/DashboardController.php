<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductOrder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $my_products = Product::where('creator_id', Auth::id())->get();
        $my_careers = Career::where('creator_id', Auth::id())->get();
        $my_categories = Category::where('id', Auth::id())->get();
        $users = User::all();

        return view('admin.dashboard', [
            'users' => $users,
            'my_products' => $my_products,
            'my_careers' => $my_careers,
            'my_categories' => $my_categories,
        ]);
    }
}
