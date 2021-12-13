<?php

namespace App\Http\Controllers;

use App\GlobalSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GlobalSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = GlobalSetting::first();
        return view('pages.admin.settings.globalsettings.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = GlobalSetting::find($id);
        $data = $request->all();
        // dd($data);

        if($request->hasFile('page_banner')) {
            Storage::delete('public/' . $item->page_banner);
            $data['page_banner'] = $request->file('page_banner')->store('web/global', 'public');
        }

        if($request->hasFile('page_banner_about')) {
            Storage::delete('public/' . $item->page_banner_about);
            $data['page_banner_about'] = $request->file('page_banner_about')->store('web/global', 'public');
        }

        if($request->hasFile('page_banner_testimonials')) {
            Storage::delete('public/' . $item->page_banner_testimonials);
            $data['page_banner_testimonials'] = $request->file('page_banner_testimonials')->store('web/global', 'public');
        }

        $item->update($data);

        return redirect()->back()->with('success', 'Global Settings Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
