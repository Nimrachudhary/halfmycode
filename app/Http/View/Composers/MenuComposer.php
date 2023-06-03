<?php

namespace App\Http\View\Composers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Page;
use App\Models\SiteSetting;
use App\Models\SpecialEvent;
use App\Models\Store;
use Illuminate\View\View;


class MenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        // $merchants = Merchant::with(['categories', 'products'])->get();
        // $view->with('menu_merchants', $merchants);

        $categories = Category::paginate(4);
        $view->with('menu_categories', $categories);

        // $products = Product::with('merchant')->get();
        // $view->with('menu_products', $products);

        // $cities = City::where('country_id', 231)->take(6)->get();
        // $view->with('menu_cities', $cities);

        // $services = Service::get();
        // $view->with('menu_services', $services);

        // $blogs = Blog::all();
        // $view->with('blogs_show', $blogs);

        $specialevents = SpecialEvent::all();
        $view->with('special_events', $specialevents);

        $page = Page::all();
        $view->with('menu_page', $page);

        $store = Store::all();
        $view->with('recently_update_brand', $store);

        $socials = SiteSetting::where('category', 'social')->get();
        $view->with('menu_socials', $socials);

    }
}
