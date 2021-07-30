<?php

namespace App\Http\Controllers;

use App\Models\Dailyactivity;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use DB;
use Illuminate\Support\Facades\Auth;

class DailyactivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Dailyactivity::latest()->paginate(5);
        return view('dailyactivity.index', compact('activities'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dailyactivity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'nip' => 'required',
            'wfo_wfh' => 'required',
            'kegiatan'=> 'required',
            'satuan'=> 'required',
            'kuantitas'=> 'required',
            'is_internet'=> 'required',
            'tgl'=> 'required',
            'created_by' =>'required' 
        ]);

        Dailyactivity::create([
                'nip' => $request->nip,
                'wfo_wfh' => $request->wfo_wfh,
                'kegiatan'=> $request->kegiatan, 
                'satuan'=> $request->satuan,
                'kuantitas'=> $request->kuantitas,
                'is_internet'=> $request->is_internet,
                'tgl'=> $request->tgl,
                'created_by' => $request->nip,
            ]);

         return redirect()->route('masterjenispeta.index')
                        ->with('success','Jenis Peta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DailyActivity  $dailyActivity
     * @return \Illuminate\Http\Response
     */
    public function show(Dailyactivity $dailyactivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DailyActivity  $dailyActivity
     * @return \Illuminate\Http\Response
     */
    public function edit(DailyActivity $dailyActivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DailyActivity  $dailyActivity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DailyActivity $dailyActivity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DailyActivity  $dailyActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(DailyActivity $dailyActivity)
    {
        //
    }
}
