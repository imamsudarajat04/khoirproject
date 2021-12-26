<?php

namespace App\Http\Controllers;

use App\News;
use App\User;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class DataBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (request()->ajax()) {
            $query = News::join('users', 'users.id', '=', 'news.user_id')
                    ->join('categories', 'categories.id', '=', 'news.category_id')
                    ->select('news.*', 'users.name as user_name', 'categories.name as category_name');
            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="btn btn-primary" href="' . route('data-blog.edit', $item->id) . '">
                            Ubah
                        </a>
                        <button class="btn btn-danger delete_modal" type="button" data-id="' . $item->id . '" data-toggle="modal" data-target="#exampleModal">
                            Hapus
                        </button>
                    ';
                })
                ->editColumn('description', function($item) {
                    if($item->description == "")
                    {
                        return 'Tidak ada deskripsi';
                    }
                    else
                    {
                        return '
                            <p class="line-clamp">' . $item->description . '</p>
                        ';
                    }
                })
                ->editColumn('cover', function ($item) {
                    $image = Storage::exists('public/' . $item->cover) && $item->cover ? Storage::url($item->cover) : asset('asset/img/imagePlaceholder.png');
                    return '
                        <div class="image-wrapper">
                            <div class="image" style="background-image: url(' . $image . ')"></div>
                        </div>
                    ';
                })
                ->rawColumns(['action', 'cover', 'description'])
                ->addIndexColumn()
                ->make();
        }
        return view('pages.admin.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.admin.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['title']);
        $data['cover'] = $request->file('cover')->store('web/dokumentasi', 'public');

        News::create($data);

        return redirect()->route('data-blog.index')->with('success', 'Data Dokumentasi Berhasil Di Simpan');
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
        $data = News::findOrFail($id);
        $categories = Category::all();
        return view('pages.admin.blog.edit', compact('data', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
        $data = $request->all();
        $item = News::findOrFail($id);

        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('cover')) {
            Storage::delete('public/' . $item->cover);

            $data['cover'] = $request->file('cover')->store('web/dokumentasi', 'public');
        }

        $item->update($data);

        return redirect()->route('data-blog.index')->with('success', 'Data Dokumentasi Berhasil Di Ubah');
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
