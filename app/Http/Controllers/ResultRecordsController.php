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
        $str = explode(";", $request->emp_id);
        $id = $str[1];
        $employee_id = Employees::where('emp_num', $id)->first();
        $records = Result_records::where('employee_num', $id)->where("out_at", NULL )->first();
        

        try {
            if($records){
                $records->test_id = $request->test_id;
                $records->employee_id = $employee_id->id;
                $records->result_id = 4;
                $records->user_id = $request->user_id;
                $records->out_at = now();
                $records->save();

                 return 'Data successfully saved!';
           }
           else{
                return 'Record not found!';
           }
            

        } catch (\Throwable $th) {
            return $th;
        }
        
            /* ->update([
                'test_id' => $request->test_id ,
                'employee_id' => $employee_id->id,
                'result_id' => 4,
                'user_id' => $request->user_id,
                'out_at' => now()
                 ]);
            
            return 'success'; */   
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
