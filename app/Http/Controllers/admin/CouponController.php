<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (request()->ajax()) {
            return datatables()->of(Coupon::select('*')->with('store'))
                ->addColumn('action', 'backend.coupon.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.coupon.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::get();
        $store = Store::get();
        return view('backend.coupon.create', compact('category', 'store'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->all();
        $validated['slug'] = Str::slug($request->coupon_title);
        $validated['deal_week'] = !empty($request->deal_week) ? 1 : 0;
        if (isset($request->image)  && ($request->image->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validated['image'] =  $imageName;
        }
        $coupon = Coupon::create($validated);
        return redirect()->route('admin.coupon.index')->with('success', 'Data Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        $category = Category::get();
        $store = Store::get();
        return view('backend.coupon.edit', compact('coupon', 'category', 'store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        $validated = $request->all();
        $validated['deal_week'] = !empty($request->deal_week) ? 1 : 0;
        if (isset($request->image)  && ($request->image->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validated['image'] =  $imageName;
        }

        $coupon->update($validated);
        return redirect()->route('admin.coupon.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        if (!$coupon->delete()) {
            return redirect()->route('admin.coupon.index')->with('error', 'Opps Something went wrong!!');
        }
        return redirect()->route('admin.coupon.index')->with('success', 'Data Deleted Successfully');
    }
    // sorting
    public function sortingCoupon()
    {
        return view('backend.coupon.coupon_sorting');
    }
    public function selectCoupon()
    {
        $coup = Store::get();
        return view('backend.coupon.sort_coupon')->with(compact('coup'));
    }

    public function  selectsstores()
    {
        $showcoupans = Coupon::where(['store_id' => 0])->get();
        return view('admin.coupons.show_coupon');
    }
    public function reorderCoupans(Request $request)
    {
        $request->validate([
            'ids'   => 'required|array',
            'ids.*' => 'integer',
        ]);
        foreach ($request->ids as $index => $id) {
            DB::table('coupons')
                ->where('id', $id)
                ->update([
                    'sorting' => $index + 1
                ]);
        }
    }
    public function selectCouponstore(Request $request)
    {
        $store_id = $request->input('store_id');
        if ($store_id == '') {
            $products = Coupon::get();
        } else {
            $products = Coupon::where(['store_id' =>  $store_id])->orderBy('sorting','asc')->get();
        }
        $products;
        return view('backend.coupon.view_sortingstore')->with(compact('products'));
    }
}
