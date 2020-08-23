<?php

namespace App\Http\Controllers;

use App\LiveOrderTracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\LiveOrderTrackingImport;
class LiveOrderTrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.admin.order-tracking');
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
        $this->validate($request,[
            'file' => 'required|mimes:xls,xlsx,csv,txt',
        ]);

        $file=$request->file('file');
        Excel::import(new LiveOrderTrackingImport, $file);
        return redirect()->back()->with('message','File uploaded successfully!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LiveOrderTracking  $liveOrderTracking
     * @return \Illuminate\Http\Response
     */
    public function show(LiveOrderTracking $liveOrderTracking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LiveOrderTracking  $liveOrderTracking
     * @return \Illuminate\Http\Response
     */
    public function edit(LiveOrderTracking $liveOrderTracking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LiveOrderTracking  $liveOrderTracking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LiveOrderTracking $liveOrderTracking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LiveOrderTracking  $liveOrderTracking
     * @return \Illuminate\Http\Response
     */
    public function destroy(LiveOrderTracking $liveOrderTracking)
    {
        //
    }
}
