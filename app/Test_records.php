<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Test_types;
use App\Test_classifications;

class Test_records extends Model
{
    protected $table = 'test_records';

    protected $fillable = [
        'test_type', 'test_code', 'provider', 'classification', 
    ];

    public function type()
    {
        return $this->belongsto('App\Test_types','type_id');
    }
    public function class()
    {
        return $this->belongsto('App\Test_classifications','class_id');
    }
}
