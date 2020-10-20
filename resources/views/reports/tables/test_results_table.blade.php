<div class="table-responsive">
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
            @if (count($results) > 0)
                @foreach ($results as $result)
                    <tr>
                        @if ($result->test)
                            <td>{{$result->test->test_code}}</td>

                            @if ($result->test->type)
                                <td>{{$result->test->type->name}}</td>
                            @else
                                <span class="text-danger">* TYPE Missing *</span>
                            @endif

                            @if ($result->test->class)
                                <td>{{$result->test->class->name}}</td>
                            @else
                                <span class="text-danger">* CLASS Missing *</span>
                            @endif 
                        @else
                            <td colspan="3" class="text-center"><span class="text-danger">* TEST entry missing *</span></td>
                        @endif

                        <td>
                            @if ($result->result)
                                {{$result->result->name}}
                            @else
                                @if ($result->out_at)
                                    <span class="text-danger">*Data Missing*</span>
                                @else
                                    
                                @endif
                            @endif                                        
                        </td>
                        <td>
                            @if ($result->employee_num)
                                {{$result->employee_num}}
                            @else
                                
                            @endif                                        
                        </td>

                        @if ($result->employee)
                            <td>{{$result->employee->name}}</td>
                            <td>{{$result->employee->birthdate}}</td>
                            @if ($result->employee->type)
                                <td>{{$result->employee->type->name}}</td>
                            @else
                                <span class="text-danger">* TYPE missing *</span>
                            @endif
                            @if ($result->employee->department)
                                <td>{{$result->employee->department->name}}</td>
                            @else
                                <span class="text-danger">* DEPARTMENT missing *</span>
                            @endif
                            @if ($result->employee->site)
                                <td>{{$result->employee->site->name}}</td>
                            @else
                                <span class="text-danger">* SITE missing *</span>
                            @endif
                        @else
                            <td colspan="5" class="text-center"><span class="text-danger">* TEST entry missing *</span></td>
                        @endif

                        <td>
                            @if ($result->user)
                                {{$result->user->name}}
                            @else
                                <span class="text-danger">* USER missing *</span>
                            @endif
                        </td>
                        <td>
                            {{$result->in_at}}
                        </td>
                        <td>
                            {{$result->out_at}}
                        </td> 
                    </tr>
                @endforeach
            @else
                <tr class="text-center">
                    <td colspan="13"><h3>NO DATA TO DISPLAY</h3></th>
                </tr>
            @endif
            
        </tbody>
    </table>
</div>