<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendences', function (Blueprint $table) {
            $table->id();
            $table->date('check_in')->nullable();
            $table->date('check_out')->nullable();
            $table->integer('no_of_days')->nullable();
            $table->unsignedBigInteger('emp_id');
            $table->enum('status',['present','absent'])->default('present');
            $table->foreign('emp_id')->references('employee_id')->on('employees')->onDelete('cascade');
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
        Schema::dropIfExists('attendences');
    }
}
