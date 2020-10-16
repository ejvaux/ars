<?php

namespace App\Http\Controllers;

use App\Result_records;
use App\Test_records;
use App\Employees;
use Illuminate\Http\Request;


class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ars_homepage/homepage');
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
    public function update(Request $request)
    {
        $str = explode(",",$request->empl_id);
        $id = $str[0];

        $test = $request->tests_id;
        $employee_id = Employees::where('emp_num', $id)->first();

        $records = Result_records::where('test_id', $test)->where('employee_num', $id)->first();

        try{
            if($records){ 
                $records->result_id = $request->results_id;
                $records->save();

                return 'Data successfully updated!';
            }
            else{
                return 'Record not found!';
            }
        } catch (\Throwable $th) {
            return $th;
        }
        
    }



    // ->update([
    //     'result_id' => $request->results_id
    //      ]);
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
