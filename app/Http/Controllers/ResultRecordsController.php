<?php

namespace App\Http\Controllers;

use App\Result_records;
use App\Test_records;
use App\Employees;
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
        $id = $request->emp_id;
        $employee_id = Employees::where('emp_num', $id)->pluck('id');
        // $request->empt = $emp

        // return $employee_id;
        
        
       
        $records = Result_records::where('employee_num', $id)
            ->where("out_at", NULL )->first();
            // ->update([
            //     // 'test_id' => $request->test_id ,
            //     // 'result_id' => 4,
            //     // 'user_id' => $request->user_id,
            //     // 'out_at' => now(),
            //     'employee_id' => 3
            //      ]);
            
            
          

        
        $records->result_id = 3;
        
        $records->save();

        return 'success';        

        
            // return json_encode($records);

        
    }

    /**
     * Remove the specified resource from storage.
     * 
     *
     * @param  \App\result_records  $result_records
     * @return \Illuminate\Http\Response
     */
    public function destroy(result_records $result_records)
    {
        //
    }
}
