<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result_records extends Model
{
    protected $table = 'result_records';

    public function test()
    {
        return $this->belongsto('App\Test_records','test_id');
    }

    public function employee()
    {
        return $this->belongsto('App\Employees','employee_id');
    }

    public function result()
    {
        return $this->belongsto('App\Results','result_id');
    }

    public function user()
    {
        return $this->belongsto('App\User','user_id');
    }
}
