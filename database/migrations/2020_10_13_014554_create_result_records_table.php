<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('test_id')->nullable();
            $table->string('employee_num');
            $table->integer('employee_id')->nullable();
            $table->integer('result_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->dateTime('in_at');
            $table->dateTime('out_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('result_records');
    }
}
