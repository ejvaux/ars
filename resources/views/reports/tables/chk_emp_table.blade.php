<div class="table-responsive">
    <table class="table table-sm text-nowrap">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Employee Number</th>
                <th scope="col">Name</th>
                <th scope="col">Birth Date</th>
                <th scope="col">Type</th>
                <th scope="col">Department</th>
                <th scope="col">Site</th>
            </tr>
        </thead>
        <tbody>
            @isset($emps)
                @if ($emps->count() > 0)
                    @foreach ($emps as $emp)
                        <tr>
                            @if ($emp->id)
                                <td>{{$emp->id}}</td>
                            @endif
                            @if ($emp->emp_num)
                                <td>{{$emp->emp_num}}</td>
                            @endif
                            @if ($emp->name)
                                <td>{{$emp->name}}</td>
                            @endif
                            @if ($emp->birthdate)
                                <td>{{$emp->birthdate}}</td>
                            @endif
                            @if ($emp->type->name)
                                <td>{{$emp->type->name}}</td>
                            @endif
                            @if ($emp->department->name)
                                <td>{{$emp->department->name}}</td>
                            @endif
                            @if ($emp->site->name)
                                <td>{{$emp->site->name}}</td>
                            @endif                            
                        </tr>
                    @endforeach
                @else
                    <tr class="text-center">
                        <td colspan="13"><h3>NO DATA TO DISPLAY</h3></th>
                    </tr>
                @endif
            @else
                <tr class="text-center">
                    <td colspan="13"><h3>NO DATA TO DISPLAY</h3></th>
                </tr>
            @endisset
            
            
        </tbody>
    </table>
</div>