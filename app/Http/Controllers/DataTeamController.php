<?php

namespace App\Http\Controllers;

use App\Team;
use App\Devision;
use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class DataTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (request()->ajax()) {
            $query = Team::join('devisions', 'devisions.id', '=', 'teams.devision_id')
                ->select('teams.*', 'devisions.name as devision_name');
            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="btn btn-primary" href="' . route('data-team.edit', $item->id) . '">
                            Ubah
                        </a>
                        <button class="btn btn-danger delete_modal" type="button" data-id="' . $item->id . '" data-toggle="modal" data-target="#exampleModal">
                            Hapus
                        </button>
                    ';
                })
                ->editColumn('avatar', function ($item) {
                    $image = Storage::exists('public/' . $item->avatar) && $item->avatar ? Storage::url($item->avatar) : asset('asset/img/team/team-1.jpg');
                    return '
                        <div class="image-wrapper">
                            <div class="image" style="background-image: url(' . $image . ')"></div>
                        </div>
                    ';
                })
                ->rawColumns(['action', 'avatar'])
                ->addIndexColumn()
                ->make();
        }
        return view('pages.admin.team.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $devisions = Devision::all();
        return view('pages.admin.team.create', compact('devisions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request)
    {
        $data = $request->all();
        $data['avatar'] = $request->file('avatar')->store('web/team/avatar', 'public');

        Team::create($data);
        return redirect()->route('data-team.index')->with('success', 'Data berhasil ditambahkan');
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
        $data = Team::findOrFail($id);
        $devisions = Devision::all();

        return view('pages.admin.team.edit', compact('data', 'devisions'));
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
        $item = Team::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('avatar')) {
            Storage::delete('public/' . $item->avatar);
            $data['avatar'] = $request->file('avatar')->store('web/team/avatar', 'public');
        }

        $item->update($data);
        return redirect()->route('data-team.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Team::findOrFail($id);
        Storage::delete('public/' . $data->avatar);

        $result = $data->delete();

        return response()->json($result);

    }
}
