

<h2 class="title2" style="margin-top:50px;">TEST RECORD</h2><br>

<div class="container" >
    <form id="testRecordForm" action="{{ action('TestRecordController@store') }}" method="POST">
        @csrf

        <div class="col-md-3"></div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-4">
                    <label for="ttype">Test Code : </label>
                </div>
                <div class="col-md-6">  
                    <input type="text" style=" height: calc(1.6em + 0.75rem + 2px); width:100%; border:1px solid black; " id="test_code" name="test_code" placeholder=" Enter code here.."><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="ttype">Test Type : </label>
                </div>
                <div class="col-md-6">  
                    <select class="form-control" style=" height: calc(1.6em + 0.75rem + 2px); border:1px solid black;" id="test_type" name="test_type" required>
                        <option class="hidden" seleted disabled>-- Please select Test Type --</option>
                        @foreach ($types as $type)
                            <option value="{{$type->id}}">{{$type->name}} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="provider">Provider : </label>
                </div>
                <div class="col-md-6">  
                    <input type="text" style=" height: calc(1.6em + 0.75rem + 2px); width:100%; border:1px solid black;" id="provider" name="provider" placeholder=" Enter provider here.."><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="classification">Classification: </label>
                </div>
                <div class="col-md-6">  
                    <select class="form-control" style=" height: calc(1.6em + 0.75rem + 2px); border:1px solid black;" id="classification" name="classification" required>
                        <option class="hidden" seleted disabled>-- Please select Classification --</option>
                        @foreach ($classes as $class)
                            <option value="{{$class->id}}">{{$class->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <button type="button" id="testRecSubmitBtn" class="btn btn-info">Submit</button>
                </div>
                <div class="col-md-4"></div>
            </div>
            
            
        </div>
        <div class="col-md-3"></div> 
        
    </form>
</div><br><br><br>









<h2 class="title2">RESULT RECORD</h2><br>


<div class="container" >
    <form id="resultRecordForm" method="POST">
        @csrf
        <div class="col-md-3"></div>
        <input type="hidden" name='user_id' value='{{Auth::user()->id}}'>
        <div class="col-md-9">

            <div class="row">
                <div class="col-md-4">
                    <label for="type">Test Name : </label>
                </div>
                <div class="col-md-6">  
                    <select class="form-control" style=" height: calc(1.6em + 0.75rem + 2px); border:1px solid black;" name="test_id" name="test_id" required>
                        <option class="hidden" seleted disabled>-- Select Test name --</option>
                        @foreach ($tests as $test)
                            <option value="{{$test->id}}">{{$test->test_code}} , {{$test->created_at}} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="ttype">Employee ID : </label>
                </div>
                <div class="col-md-6">  
                    <input type="text" autocomplete="off" style=" height: calc(1.6em + 0.75rem + 2px); border:1px solid black; width:100%;" id="emp_id" name="emp_id" placeholder=" Scan QR code here.."><br>
                </div>&nbsp;
            </div>

            {{-- <div class="row">
                <div class="col-md-4">
                    <label for="provider">Result : </label>
                </div>
                <div class="col-md-6">  
                    <input type="text" style=" height: calc(1.6em + 0.75rem + 2px); border:1px solid black; width:100%;" id="result_id" name="result_id" placeholder=" Scan Result here.."><br>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <button type="button" id="resultRecSubmitBtn" class="btn btn-info">Submit</button>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <div class="col-md-3"></div>
        
    </form>
</div>















