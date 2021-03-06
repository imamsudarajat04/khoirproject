<?php

namespace App\Http\Controllers;

use App\News;
use App\Category;
use App\Devision;
use App\GlobalSetting;
use App\FooterSetting;
use App\HomepageSetting;
use Illuminate\Http\Request;

class BlogUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devisions = Devision::all();
        $global_settings = GlobalSetting::first();
        $footer_settings = FooterSetting::first();
        $header_settings = HomepageSetting::first();
        $blogs = News::take(3)->paginate(3);
        $categories = Category::all();
        $recent_posts = News::orderBy('id', 'desc')->take(5)->get();
        return view('pages.users.blog.index', [
            'header_settings' => $header_settings,
            'global_settings' => $global_settings,
            'devisions'       => $devisions,
            'footer_settings' => $footer_settings,
            'blogs'           => $blogs,
            'categories'      => $categories,
            'recent_posts'    => $recent_posts
        ]);
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
    public function show($slug)
    {
        $news = News::where('slug', $slug)->first();
        $header_settings = HomepageSetting::first();
        $global_settings = GlobalSetting::first();
        $footer_settings = FooterSetting::first();
        $devisions = Devision::all();
        $categories = Category::all();
        $recent_posts = News::orderBy('id', 'desc')->take(5)->get();

        return view('pages.users.blog.show', [
            'header_settings' => $header_settings,
            'global_settings' => $global_settings,
            'footer_settings' => $footer_settings,
            'recent_posts'    => $recent_posts,
            'categories'      => $categories,
            'devisions'       => $devisions,
            'news'            => $news
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

    public function search(Request $request)
    {
        $search = $request->input('search');

        $blogs  = News::query()->where('title', 'LIKE', '%'.$search.'%')->paginate(3);

        $devisions = Devision::all();
        $global_settings = GlobalSetting::first();
        $footer_settings = FooterSetting::first();
        $header_settings = HomepageSetting::first();
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
}
