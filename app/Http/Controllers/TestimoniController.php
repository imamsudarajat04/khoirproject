<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Requests\TestimoniRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (request()->ajax()) {
            $query = Testimonial::all();
            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="btn btn-primary" href="' . route('testimoni.edit', $item->id) . '">
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
                ->editColumn('avatar', function ($item) {
                    $image = Storage::exists('public/' . $item->avatar) && $item->avatar ? Storage::url($item->avatar) : asset('asset/img/team/team-1.jpg');
                    return '
                        <div class="image-wrapper">
                            <div class="image" style="background-image: url(' . $image . ')"></div>
                        </div>
                    ';
                })
                ->rawColumns(['action', 'description', 'avatar'])
                ->addIndexColumn()
                ->make();
        }
        return view('pages.admin.testimoni.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimoniRequest $request)
    {
        $data = $request->all();
        $data['avatar'] = $request->file('avatar')->store('web/testi/avatar', 'public');

        Testimonial::create($data);
        return redirect()->route('testimoni.index')->with('success', 'Data berhasil ditambahkan');
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
        $data = Testimonial::findOrFail($id);
        return view('pages.admin.testimoni.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TestimoniRequest $request, $id)
    {
        $item = Testimonial::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('avatar')) {
            Storage::delete('public/' . $item->avatar);
            $data['avatar'] = $request->file('avatar')->store('web/testi/avatar', 'public');
        }

        $item->update($data);
        return redirect()->route('testimoni.index')->with('success', 'Data berhasil diubah');
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
