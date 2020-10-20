@extends('layouts.app')

@section('js')    
    <script src="{{ asset('js\report.js') }} "defer></script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">Test Results</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md">
                            <a class="btn btn-outline-secondary py-0 px-1 mb-1" data-toggle="collapse" href="#filtercollapse" role="button">Filter +</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md">
                            <form id='filter_result_form' action="" method="post">
                                <div class="collapse multi-collapse" id="filtercollapse">
                                    <div class="card card-body">
                                        <div class="form-group row">
                                            {{-- TEMP --}}
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-md">
                                                        <label for="emp" class="col-form-label-sm">Employee Number:</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <input class="form-control form-control-sm" type="text" name="emp" id="emp" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- TEMP --}}
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-md">
                                                        <label for="code" class="col-form-label-sm">Test Code:</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <select class="form-control form-control-sm select2" name="code" id="code">
                                                                <option value="">- ALL -</option>
                                                            @foreach ($test_records as $test)
                                                                <option value="{{$test->id}}">{{$test->test_code}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- TEMP --}}
                                            
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-md">
                                                        <label for="emp" class="col-form-label-sm">Result:</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <select class="form-control form-control-sm select2" name="res" id="res">
                                                            <option value="">- ALL -</option>
                                                        @foreach ($res as $re)
                                                            <option value="{{$re->id}}">{{$re->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- TEMP --}}
                                            {{-- <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-md">
                                                        <label for="test_type" class="col-form-label-sm">Test Type:</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <select class="form-control form-control-sm select2" name="test_type" id="test_type">
                                                                <option value="">- ALL -</option>
                                                            @foreach ($test_types as $type)
                                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>                                            
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-md">
                                                        <label for="test_class" class="col-form-label-sm">Test Class:</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <select class="form-control form-control-sm select2" name="test_class" id="test_class">
                                                                <option value="">- ALL -</option>
                                                            @foreach ($test_classes as $class)
                                                                <option value="{{$class->id}}">{{$class->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="col-md-3">
                                                <div class="row p-4">
                                                    {{-- <div class="col-md">
                                                        <a class="btn btn-secondary form-control" href="#">Export</a>
                                                    </div> --}}
                                                    <div class="col-md p-0">
                                                        <a id="resetbtn" class="btn btn-outline-secondary form-control m-0" href="#">Reset</a>
                                                    </div>
                                                    <div class="col-md p-0">
                                                        <a id="loadTableData" class="btn btn-outline-secondary form-control m-0" href="#">Load</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-md">
                                                        <label for="emp" class="col-form-label-sm">Employee Number:</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <input class="form-control form-control-sm" type="text" name="emp" id="emp" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="row">
                                                    <div class="col-md">
                                                        <label for="emp_type" class="col-form-label-sm">Employee Type:</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <select class="form-control form-control-sm select2" name="emp_type" id="emp_type">
                                                                <option value="">- ALL -</option>
                                                            @foreach ($emp_types as $type)
                                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="row">
                                                    <div class="col-md">
                                                        <label for="dept" class="col-form-label-sm">Department:</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <select class="form-control form-control-sm select2" name="dept" id="dept">
                                                                <option value="">- ALL -</option>
                                                            @foreach ($departments as $department)
                                                                <option value="{{$department->id}}">{{$department->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="row">
                                                    <div class="col-md">
                                                        <label for="site" class="col-form-label-sm">Sites:</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <select class="form-control form-control-sm select2" name="site" id="site">
                                                                <option value="">- ALL -</option>
                                                            @foreach ($sites as $site)
                                                                <option value="{{$site->id}}">{{$site->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="form-group row">
                                            <div class="col-md">
                                                <div class="row">
                                                    <div class="col-md">
                                                        <label for="" class="col-form-label-sm">Scan IN:</label>
                                                    </div>
                                                </div>
                                                <div class="row text-center">
                                                    <div class="col-md">
                                                        <input type="datetime-local" name="scanIn_start" id="scanIn_start">-<input type="datetime-local" name="scanIn_end" id="scanIn_end">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="row">
                                                    <div class="col-md">
                                                        <label for="" class="col-form-label-sm">Scan OUT:</label>
                                                    </div>
                                                </div>
                                                <div class="row text-center">
                                                    <div class="col-md">
                                                        <input type="datetime-local" name="scanOut_start" id="scanOut_start">-<input type="datetime-local" name="scanOut_end" id="scanOut_end">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </form>                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div id="resultsTableDiv">                        
                                {{-- <div class="table-responsive">
                                    <table class="table table-sm text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">TEST CODE</th>
                                                <th scope="col">TEST TYPE</th>
                                                <th scope="col">CLASSIFICATION</th>
                                                <th scope="col">RESULT</th>
                                                <th scope="col">EMPLOYEE NO.</th>
                                                <th scope="col">NAME</th>
                                                <th scope="col">BIRTH DATE</th>
                                                <th scope="col">EMPLOYEE TYPE</th>
                                                <th scope="col">DEPARTMENT</th>
                                                <th scope="col">SITE</th>
                                                <th scope="col">SCAN BY</th>
                                                <th scope="col">SCAN IN</th>
                                                <th scope="col">SCAN OUT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                                <tr class="text-center">
                                                    <td colspan="13"><h3>PLEASE LOAD DATA FROM FILTER TAB.</h3></th>
                                                </tr>
                                            
                                        </tbody>
                                    </table>
                                </div> --}}
                                @include('reports.tables.test_results_table')
                            </div>
                            {{-- @include('reports.tables.test_results_table') --}}
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
            
@endsection
