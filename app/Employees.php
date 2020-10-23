<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Test_types;
use App\Departments;
use App\Site;

class Employees extends Model
{
    protected $connection = 'sqlsrv2';

    protected $table = 'employees';

    public function type()
    {
        return $this->belongsto('App\Emp_type','type_id');
    }

    public function department()
    {
        return $this->belongsto('App\Departments','department_id');
    }

    public function site()
    {
        return $this->belongsto('App\Site','site_id');
    }
}
