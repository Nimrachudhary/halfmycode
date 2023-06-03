<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Exception;

class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(SiteSetting::select('*'))
                ->addColumn('action', 'backend.site-setting.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.site-setting.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.site-setting.create');
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->all();
            $sitesetting = SiteSetting::create($validated);
            return redirect()->route('admin.sitesetting.index')->with('success', 'Data Saved Successfully');
        } catch (Exception $e) {
            report($e);
            return redirect()->route('admin.sitesetting.index')->with('error', $e->getMessage());
        }
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
    public function edit(SiteSetting $sitesetting)
    {
        return view('backend.site-setting.edit', compact('sitesetting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteSetting $sitesetting)
    {
        $sitesetting->update($request->all());
        return redirect()->route('admin.sitesetting.index')->with('success', 'Data Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteSetting $sitesetting)
    {
        if(!$sitesetting->delete()) {
            return redirect()->route('admin.sitesetting.index')->with('error', 'Opps Something went wrong!!');
        }
        return redirect()->route('admin.sitesetting.index')->with('success', 'Data Deleted Successfully');

    }
}
