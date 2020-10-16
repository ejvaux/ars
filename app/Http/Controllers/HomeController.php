<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test_classifications;
use App\Test_types;
use App\Test_records;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $classes = test_classifications::all();
        $types = test_types::all();
        $tests = test_records::orderByDesc('id')->take(5)->get();

        return view('home',compact('classes','types','tests' ));
    }
}
