<?php

namespace App\Http\Controllers;
use App\Faq;
use App\Team;
use App\Devision;
use App\Testimonial;
use App\FooterSetting;
use App\GlobalSetting;
use App\HomepageSetting;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devisions = Devision::all();
        $header_settings = HomepageSetting::first();
        $footer_settings = FooterSetting::first();
        $global_settings = GlobalSetting::first();
        $teams = Team::take(4)->get();
        foreach ($teams as $team) {
            $devision = Devision::where('id', $team->devision_id)->first();
            $team->devision_name = $devision->name;
        }
        $faqs = Faq::take(4)->get();
        $testimonis = Testimonial::take(5)->get();
        return view('pages.users.welcome', compact('devisions', 'footer_settings', 'header_settings', 'global_settings', 'teams', 'faqs', 'testimonis'));
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
