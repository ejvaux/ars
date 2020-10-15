<?php

namespace App\Http\Controllers;

use App\test_records;
use App\Test_classifications;
use App\Test_types;
use Illuminate\Http\Request;

class TestRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = test_classifications::all();
        $types = test_types::all();
        $tests= test_records::all();

        return view('ars_homepage.homeTab',compact('classes','types','tests' ));
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
     * @param  \App\test_records  $test_records
     * @return \Illuminate\Http\Response
     */
    public function show(test_records $test_records)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\test_records  $test_records
     * @return \Illuminate\Http\Response
     */
    public function edit(test_records $test_records)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\test_records  $test_records
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, test_records $test_records)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\test_records  $test_records
     * @return \Illuminate\Http\Response
     */
    public function destroy(test_records $test_records)
    {
        //
    }
}
