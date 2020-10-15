<div style="overflow-x:auto;">
    <table id="mytable" class="table table-bordred table-striped" style="width:100%;">  
        <thead>
        <tr> &nbsp; &nbsp; 
            <th><i class="fa fa-users"></i>&nbsp; &nbsp; &nbsp;FULL NAME</th>
            <th>Employee ID</th>
            <th>Results</th>
            <th>Date Created</th>
        </tr>
        </thead>
        <tbody>
            @isset($employees)
                @if ($employees->count() > 0)
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{$employee->id}}</td>
                            <td>{{$employee->result->name}}</td>
                            <td>{{$employee->created_at}}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7">NO DATA</td>
                    </tr>
                @endisset
                    
                @else
                    <tr>
                        <td colspan="7">NO DATA</td>
                    </tr>
                @endisset
        </tbody>
    </table>
</div>
<div class="row">
    <div class="col-md">
        @isset($employees)
            {{-- {{ $employees->appends(request()->query())->links() }} --}}
            {!! $employees->appends(\Request::except('page'))->render() !!}
            {{-- Input::except(array('page')) --}}
        @endisset                        
    </div>    
</div>