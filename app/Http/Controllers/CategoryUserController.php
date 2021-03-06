<?php

namespace App\Http\Controllers;

use App\News;
use App\Category;
use App\Devision;
use App\GlobalSetting;
use App\FooterSetting;
use App\HomepageSetting;
use Illuminate\Http\Request;

class CategoryUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $devisions = Devision::all();
        $global_settings = GlobalSetting::first();
        $footer_settings = FooterSetting::first();
        $header_settings = HomepageSetting::first();
        // $blogs = News::take(3)->paginate(3);
        $blogs = News::where('category_id', $id)->paginate(3);
        $categories = Category::all();
        $recent_posts = News::orderBy('id', 'desc')->take(5)->get();
        return view('pages.users.blog.index', [
            'header_settings' => $header_settings,
            'global_settings' => $global_settings,
            'devisions'       => $devisions,
            'footer_settings' => $footer_settings,
            'categories'      => $categories,
            'recent_posts'    => $recent_posts,
            'blogs'           => $blogs
        ]);
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
        //
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
