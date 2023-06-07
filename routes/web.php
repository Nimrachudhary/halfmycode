<?php

use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CouponController;
use App\Http\Controllers\admin\FooterDevelopermoodController;
use App\Http\Controllers\admin\HeaderDevelopermoodController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\admin\SiteSettingController;
use App\Http\Controllers\admin\SpecialEventController;
use App\Http\Controllers\admin\StoreController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\frontcategoryController;
use App\Http\Controllers\FrontStoreController;
use App\Models\Herderdevelopermod;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// frontend route
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontStoreController::class, 'welcome'])->name('welcome');
Route::get('/search/stores', [FrontStoreController::class, 'searchStores'])->name('search.stores');
Route::get('/all-categories', [frontcategoryController::class, 'categories'])->name('all-categories');
Route::get('categories/{id}', [frontcategoryController::class, 'detailcategories']);
Route::get('/stores', [FrontStoreController::class, 'stores'])->name('stores');
Route::get('/store/{id}', [FrontStoreController::class, 'coupon'])->name('store');

Route::get('pages/{slug}', [FrontStoreController::class, 'pages']);
Route::get('blogs', [FrontStoreController::class, 'blog']);
Route::get('blog/{id}', [FrontStoreController::class, 'subblog']);
Route::get('special', [FrontStoreController::class, 'special']);
Route::get('specials/{id}', [FrontStoreController::class, 'detailspecial']);

Route::get('/topvoucher', [FrontStoreController::class, 'topvoucher']);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/changeuseractive', [CategoryController::class, 'changeuseractive'])->name('changeuseractive');
Route::get('/changestoreactive', [StoreController::class, 'changestoreactive'])->name('changestoreactive');
Route::get('/changestatusblog', [BlogController::class, 'changestatusblog'])->name('changestatusblog');

Auth::routes();




Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'myCustomAuthMiddleware'], function () {
    Route::post('updatePassword/{user}', [UserController::class, 'updatePassword'])->name('updatePassword');

    Route::get('/sorting', [CouponController::class, 'sortingCoupon']);
    Route::get('/storecoupon', [CouponController::class, 'selectCoupon']);
    Route::get('/storeio', [CouponController::class, 'selectCoupon']);
    
    Route::get('/couponstores', [CouponController::class, 'selectsstores']);
    Route::post('/admin/coupons/sorting', [CouponController::class, 'reorderCoupans']);
    Route::get('/showstorecoupon', [CouponController::class, 'selectCouponstore']);

    Route::resources([
        'categories'    =>  CategoryController::class,
        'stores'        =>  StoreController::class,
        'coupon'        =>  CouponController::class,
        'pages'         =>  PageController::class,
        'sitesetting'   =>  SiteSettingController::class,
        'blog'          =>  BlogController::class,
        'event'         =>  SpecialEventController::class,
        'users'         =>  UserController::class,
        'herder'         =>  HeaderDevelopermoodController::class,
        'footer'         =>  FooterDevelopermoodController::class,

    ]);
});




