<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Result_records;
use App\Test_records;
use App\Test_types;
use App\Test_classifications;
use App\Emp_type;
use App\Departments;
use App\Site;
use App\Results;
use App\Employees;

class ReportsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        /* $results = DB::table('test_results_report')->get(); */

        $test_records = Test_records::all();
        $test_types = Test_types::all();
        $test_classes = Test_classifications::all();
        $emp_types = Emp_type::all();
        $departments = Departments::all();
        $sites = Site::all();
        $res = Results::all();
        $results = [];
        /* $results = Result_records::paginate(100); */
        return view('reports.test_results',compact('results','test_records','test_types','test_classes','emp_types','departments','sites','res'));
    }

    public function filter_results(Request $request)
    {
        $results = new Result_records;

        if ($request->code) {
            $results = $results->where('test_id',$request->code);
        }
        if ($request->emp) {
            $results = $results->where('employee_num','LIKE','%'.$request->emp.'%');
        }
        if ($request->res) {
            $results = $results->where('result_id',$request->res);
        }
        /* if ($request->test_type) {
            $results = $results->where('test_id',$request->code);
        }
        if ($request->test_class) {
            $results = $results->where('test_id',$request->code);
        } */
        
        /* 
        $request->emp_type
        $request->dept
        $request->site
        $request->scanIn_start
        $request->scanIn_end
        $request->scanOut_start
        $request->scanOut_end */

        $results = $results->get();

        /* $results = Result_records::all(); */

        return view('reports.tables.test_results_table',compact('results'));
    }

    public function check_employee(Request $request)
    {
        if(!$request->has('qr'))
        {
            return view('reports.check_employee');
        }
        else
        {
            $en = '';
            if ( strpos($request->qr,';') ) {
                $str = explode(";",$request->qr);
                $en = $str[1];
            } else {
                $en = $request->qr;
            } 
            $emps = Employees::where('emp_num','LIKE','%'.$en.'%')->get();
            return view('reports.tables.chk_emp_table',compact('emps'));
        }
        
    }
}
