<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('fees', function (Blueprint $table) {
            $table->bigIncrements('fee_id');
            $table->integer('student_id');
            $table->string('dateofpayment');
            $table->string('amount');
            $table->timestamps();
            $table->foreign('student_id')
                  ->references('student_id')->on('students')
                  ->onDelete('cascade');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Fees');
    }
}
