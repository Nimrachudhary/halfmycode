<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SpecialEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SpecialEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (request()->ajax()) {
            return datatables()->of(SpecialEvent::select('*'))
                ->addColumn('action', 'backend.specialevent.action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.specialevent.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.specialevent.create');
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
        $validated['is_featured'] = !empty($request->is_featured) ? 1 : 0;
        if (isset($request->image)  && ($request->image->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validated['image'] =  $imageName;
        }
        $event = SpecialEvent::create($validated);
        return redirect()->route('admin.event.index')->with('success', 'Data Saved Successfully');

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
    public function edit(SpecialEvent $event)
    {
        return view('backend.specialevent.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SpecialEvent $event)
    {
        $validated=$request->all();
        $validated['slug'] = Str::slug($request->name);
        if (isset($request->image)  && ($request->image->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validated['image'] =  $imageName;
        }
        $event->update($validated);
        return redirect()->route('admin.event.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SpecialEvent $event)
    {
        if (!$event->delete()) {
            return redirect()->route('admin.categories.index')->with('error', 'Opps Something went wrong!!');
        }
        return redirect()->route('admin.categories.index')->with('success', 'Data Deleted Successfully');

    }
    public function changeevent(Request $request)
    {
        $user = SpecialEvent::find($request->user_id);
        $user->status = !$user->status;
        $user->save();
        return response()->json(['success' => 'User status change successfully.']);
    }
}
