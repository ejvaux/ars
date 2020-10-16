@extends('layouts.app')

@section('js')

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->


    <script src="{{ asset('js\testrecord.js') }} "defer></script>
    <script src="{{ asset('js\resultrecord.js') }}" defer></script>
    <link href="{{ asset('css\ars.css') }}" rel="stylesheet">
@endsection



@section('content')


        <div class="container" style="margin: 0px 50px; ">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card" style="width:100%; border:none;">
                        <h2 class="title">ANTI-BODIES RECORD SYSTEM</h2>
                        <div class="card-body">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active">
                                    <a class="nav-link active" data-toggle="tab" href="#home-tab" role="tab">HOME</a>
                                </li>
                                <li>
                                    <a class="nav-link" data-toggle="tab" href="#update-tab" role="tab">UPDATE</a>
                                </li>
                                {{-- <li>
                                    <a class="nav-link" data-toggle="tab" href="#records-tab" role="tab">RECORDS</a>
                                </li>  --}}
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home-tab" role="tabpanel">
                                    @include('ars_homepage.homeTab')
                                </div>
                                <div class="tab-pane" id="update-tab" role="tabpanel">
                                    @include('ars_homepage.updateTab')
                                </div> 
                                <div class="tab-pane" id="records-tab" role="tabpanel">
                                    @include('ars_homepage.recordsTab')
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            
@endsection
