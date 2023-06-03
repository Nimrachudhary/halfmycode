<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (request()->ajax()) {
            return datatables()->of(Store::select('*'))
                ->addColumn('action', 'backend.store.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.store.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products= Category::get();
        return view('backend.store.create',compact('products'));
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
        $validated['slug'] = Str::slug($request->name);
        $validated['recently_update'] = !empty($request->recently_update) ? 1 : 0;
        if (isset($request->image)  && ($request->image->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validated['image'] =  $imageName;
        }
        if (isset($request->logo)  && ($request->logo->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('logo'), $imageName);
            $validated['logo'] =  $imageName;
        }
        $store = Store::create($validated);
        return redirect()->route('admin.stores.index')->with('success', 'Data Saved Successfully');
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
    public function edit(Store $store)
    {
        return view('backend.store.edit', compact('store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        $validated = $request->all();
        if (isset($request->image)  && ($request->image->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validated['image'] =  $imageName;
        }
        if (isset($request->logo)  && ($request->logo->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('logo'), $imageName);
            $validated['logo'] =  $imageName;
        }
        $store->update($validated);
        return redirect()->route('admin.stores.index')->with('success', 'Data Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        if (!$store->delete()) {
            return redirect()->route('admin.stores.index')->with('error', 'Opps Something went wrong!!');
        }
        return redirect()->route('admin.stores.index')->with('success', 'Data Deleted Successfully');
    }
    public function changestoreactive(Request $request)
    {
        $user = Store::find($request->user_id);
        $user->status = !$user->status;
        $user->save();
        return response()->json(['success' => 'User status change successfully.']);
    }
}
