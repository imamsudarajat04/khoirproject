<?php

namespace App\Http\Controllers;

use App\Devision;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\DevisionRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class DataDevisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (request()->ajax()) {
            $query = Devision::all();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="btn btn-success" href="' . route('data-devisi.show', $item->id) . '">
                            Lihat
                        </a>
                        <a class="btn btn-primary" href="' . route('data-devisi.edit', $item->id) . '">
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
                ->editColumn('logo', function ($item) {
                    $image = Storage::exists('public/' . $item->logo) && $item->logo ? Storage::url($item->logo) : asset('asset/img/imagePlaceholder.png');
                    return '
                        <div class="image-wrapper">
                            <div class="image" style="background-image: url(' . $image . ')"></div>
                        </div>
                    ';
                })
                ->rawColumns(['action', 'description', 'logo'])
                ->addIndexColumn()
                ->make();
        }
        return view('pages.admin.devision.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.devision.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DevisionRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['logo'] = $request->file('logo')->store('web/devisi', 'public');

        Devision::create($data);
        return redirect()->route('data-devisi.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Devision::findOrFail($id);
        return view('pages.admin.devision.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Devision::findOrFail($id);
        return view('pages.admin.devision.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Responsea
     */
    public function update(DevisionRequest $request, $id)
    {

        $data = $request->all();
        $item = Devision::findOrFail($id);

        $data['slug'] = Str::slug($data['name']);

        if ($request->hasFile('logo')) {
            Storage::delete('public/' . $item->logo);

            $data['logo'] = $request->file('logo')->store('web/devisi', 'public');
        }

        $item->update($data);

        return redirect()->route('data-devisi.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Devision::findOrFail($id)->delete();
        
        return response()->json($result);
    }
}
