<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Page;
use App\Models\SpecialEvent;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontStoreController extends Controller
{
    public function stores(Request $request)
    {
        $store = Store::orderBy('name')->get();
        return view('frontend.Stores', compact('store'));
    }
    public function coupon($id)
    {
        $store = Store::where('slug', $id)->get();
        $coupon = Coupon::where('store_id', $store[0]->id)->orderby('sorting')->get();
        return view('frontend.Coupon',compact('coupon','store') );
    }

    public function pages(Request $request)
    {
        $page = Page::whereSlug($request->slug)->first();
        return view('frontend.pages',compact('page'));
    }
    public function blog(Request $request)
    {
        $blogs = Blog::get();
        return view('frontend.Blogs',compact('blogs'));
    }
    public function subblog($id)
    {

        $showsblog = Blog::where('slug', $id)->get();
        return view('frontend.detail-blog',compact('showsblog'));
    }
    public function special()
    {
        $showsevent = SpecialEvent::get();
        return view('frontend.special_event',compact('showsevent'));
    }
    public function detailspecial($id)
    {
        $event = SpecialEvent::where('slug', $id)->get();
        return view('frontend.detail_special_event',compact('event'));
    }
    public function welcome(Request $request)
    {
        $dropdownCategories = Category::with('stores')->limit(5)->get()->map(function($category) {
            $category->stores = $category->stores->take(20);
            return $category;
          });
        $blogs = Blog::limit(5)->get();
        $weeks = Coupon::with(['store'])->get();
        $coupons = Coupon::with(['store'])->limit(3)->where('image', '<>', null)->get();

        $showcoupon = DB::table('coupons')
        ->leftJoin('stores','coupons.store_id', '=', 'stores.id')
        ->select('coupons.*','stores.image as store_image','stores.name','stores.name_from')
        ->where('coupons.top_voucher','1')
        ->limit(4)
        ->get();
        return view('welcome', compact('blogs','dropdownCategories',
        'coupons','weeks','showcoupon'));
    }

    public function  searchStores(Request $req)
    {
        $stores = Store::where('name', 'LIKE', '%'.$req->q.'%')->get();
        return view('frontend.search', get_defined_vars());
    }

    public function topvoucher(){

        // $users = Coupon::join('stores', 'stores.id', '=', 'coupons.store_id')
        // ->select(['coupons.*', 'stores.image'])->get();

        $showcoupon = DB::table('coupons')
        ->leftJoin('stores','coupons.store_id', '=', 'stores.id')
        ->select('coupons.*','stores.image as store_image','stores.name','stores.name_from')
        ->where('coupons.top_voucher','1')
        ->get();

        return view('frontend.top_voucher')->with(compact('showcoupon' ));
    }

}
