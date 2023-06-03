<?php

namespace App\Http\Controllers;

use App\Http\Controllers\admin\CategoryController;
use Illuminate\Http\Request;

use App\Http\Manager\SubscriptionManager;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Store;

class frontcategoryController extends Controller
{
    public function categories(Request $request)
    {
        $category = Category::get();
        return view('frontend.categories', compact('category'));
    }
    public function detailcategories($id)
    {
        $dropdownCategories = Category::with(['stores' =>  function ($query) {
            $query->orderBy('created_at', 'desc')->limit(5);
        }])->limit(5)->get();
        // dd($dropdownCategories);
        $category = Category::where('slug', $id)->get();
        $coupon = Coupon::where('catgory_id', $category[0]->id)->get();
        $store = Store::where('category_id', $category[0]->id)->get();
        return view('frontend.detail_category', compact('category', 'store', 'coupon', 'dropdownCategories'));
    }
}
