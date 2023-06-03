<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->all());

        if (request()->ajax()) {
            return datatables()->of(Blog::select('*'))
                ->addColumn('action', 'backend.blog.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.create');
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
        // $validated['is_featured'] = !empty($request->is_featured) ? 1 : 0;
        if (isset($request->image)  && ($request->image->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validated['image'] =  $imageName;
        }
        if (isset($request->blogimage)  && ($request->blogimage->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->blogimage->extension();
            $request->blogimage->move(public_path('blogimage'), $imageName);
            $validated['blogimage'] =  $imageName;
        }

        $blog = Blog::create($validated);
        return redirect()->route('admin.blog.index')->with('success', 'Data Saved Successfully');
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
    public function edit(Blog $blog)
    {
        return view('backend.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->all();
        $validated['slug'] = Str::slug($request->name);
        if (isset($request->image)  && ($request->image->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validated['image'] =  $imageName;
        }
        $blog->update($validated);
        return redirect()->route('admin.blog.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if (!$blog->delete()) {
            return redirect()->route('admin.blog.index')->with('error', 'Opps Something went wrong!!');
        }
        return redirect()->route('admin.blog.index')->with('success', 'Data Deleted Successfully');
    }
    public function changestatusblog(Request $request)
    {
        $blog = Blog::find($request->user_id);
        $blog->status = !$blog->status;
        $blog->save();
        return response()->json(['success' => 'User status change successfully.']);
    }
}
