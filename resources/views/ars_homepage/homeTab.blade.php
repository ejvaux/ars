
<script src="{{ asset('js/record.js') }}"></script>


<div class="container" id="testRecord">
    <form id="testRecordForm" action="{{ action('TestRecordController@store') }}" method="POST">
        @csrf

        <div class="col-md-3"></div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-2">
                    <input type="hidden" id="test_id">
                    <label for="ttype">Test Code : </label>
                </div>
                <div class="col-md-4">  
                    <input type="text" name="test_code" placeholder="Enter type here.."><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <input type="hidden" id="test_id">
                    <label for="ttype">Test Type : </label>
                </div>
                <div class="col-md-4">  
                    <input type="number" name="test_type" placeholder="Enter type here.."><br>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <label for="provider">Provider : </label>
                </div>
                <div class="col-md-4">  
                    <input type="text" name="provider" placeholder="Enter provider here.."><br>
                </div>
            </div>
                
            <div class="row">
                <div class="col-md-2">
                    <label for="classification">Classification : </label>
                </div>
                <div class="col-md-4">  
                    <input type="number" name="classification" placeholder="Enter provider here.."><br>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                <button type="button" id="testRecSubmitBtn" class="btn btn-info">Submit</button>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <div class="col-md-3"></div>
        
    </form>
</div>























<div class="container" id="resultRecord">
    <form>
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-2">
                    <input type="hidden" id="test_id">
                    <label for="ttype">Test Result : </label>
                </div>
                <div class="col-md-4">  
                <input type="text" id=" " name="idname" placeholder="Scan QR code here.."><br>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <label for="provider">Provider2 : </label>
                </div>
                <div class="col-md-4">  
                    <input type="text" id=" " name=" " placeholder="Enter provider here.."><br>
                </div>
            </div>
                
            <div class="row">
                <div class="col-md-2">
                    <label for="classification">Classification2 : </label>
                </div>
                <div class="col-md-4">  
                    <input type="text" id=" " name=" " placeholder="Enter provider here.."><br>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <button>Submit</button>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <div class="col-md-3"></div>
        
    </form>
</div>













