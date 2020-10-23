@extends('layouts.app')

@section('js')    
    <link href="{{ asset('css/report.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/report.js') }}" defer></script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">Check Employee</div>

                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="qr" id="qr" placeholder="Scan QR code here . . .">
                        </div>
                        <div class="col-md">
                            <input class="form-control-plaintext font-weight-bold text-info" type="text" name="msg" id="msg" value="READY" readonly>
                        </div>
                    </div>
                    {{-- <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="">ID</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <input class="form-control-plaintext" type="text" name="id" id="id" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="">Employee No.</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <input class="form-control-plaintext" type="text" name="emp_num" id="emp_num" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="">Name</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <input class="form-control-plaintext" type="text" name="name" id="name" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="">Birth Date</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <input class="form-control-plaintext" type="text" name="bday" id="bday" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="">Type</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <input class="form-control-plaintext" type="text" name="type" id="type" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="">Department</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <input class="form-control-plaintext" type="text" name="dept" id="dept" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="">Site</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <input class="form-control-plaintext" type="text" name="site" id="site" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-md">
                            <div id="empTableDiv">@include('reports.tables.chk_emp_table')</div>
                        </div>    
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
            
@endsection
