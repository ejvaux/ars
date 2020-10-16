
<h2 class="title2" style="margin-top:50px;">UPDATE RECORD</h2><br>


<div class="container" >
    <form id="updateRecForm" method="POST">
        @csrf
        <div class="col-md-3"></div>
        <input type="hidden" name='user_id' value='{{Auth::user()->id}}'>
        <div class="col-md-9">

            <div class="row">
                <div class="col-md-4">
                    <label for="type">Test Name : </label>
                </div>
                <div class="col-md-6">  
                    <select class="form-control" style=" height: calc(1.6em + 0.75rem + 2px); border:1px solid black;" name="tests_id" name="tests_id" required>
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
                    <input type="text" style=" height: calc(1.6em + 0.75rem + 2px); border:1px solid black; width:100%;" id="empl_id" name="empl_id" placeholder=" Scan QR code here.."><br>
                </div>&nbsp;
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label for="provider">Result : </label>
                </div>
                <div class="col-md-6">  
                    <input type="text" style=" height: calc(1.6em + 0.75rem + 2px); border:1px solid black; width:100%;" id="results_id" name="results_id" placeholder=" Scan Result here.."><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <button type="button" id="updateRecSubmitBtn" class="btn btn-info">Submit</button>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <div class="col-md-3"></div>
        
    </form>
</div>