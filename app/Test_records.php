<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test_records extends Model
{
    protected $table = 'test_records';

    public function type()
    {
        return $this->belongsto('App\Test_types','type_id');
    }

    public function class()
    {
        return $this->belongsto('App\Test_classifications','class_id');
    }
}
