<?php

namespace App\Http\Controllers;

use App\Result_records;
use App\Test_records;
use Illuminate\Http\Request;

class ResultRecordsController extends Controller
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
     * @param  \App\result_records  $result_records
     * @return \Illuminate\Http\Response
     */
    public function show(result_records $result_records)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\result_records  $result_records
     * @return \Illuminate\Http\Response
     */
    public function edit(result_records $result_records)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\result_records  $result_records
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Result_records::where("emp_num", "emp_id")
        ->where("out_at",NULL)
        ->update([
            'test_id' => $request->test_id ,
            'employee_id' => $request->emp_id , 
            'result_id' => 4,
            'user_id' => $request->test_id,
            'out_at' => now(), 

        ]);

        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\result_records  $result_records
     * @return \Illuminate\Http\Response
     */
    public function destroy(result_records $result_records)
    {
        //
    }
}
