<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   Schema::dropIfExists('employees');
        Schema::create('employees', function (Blueprint $table) {
            $table->id("employee_id");
            $table->string("name");
            $table->string("email");
            $table->integer("phone");
            $table->unsignedBigInteger('dept_id');
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('position_id');
            $table->foreign('dept_id')->references('department_id')->on('departments')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('cascade');
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
        Schema::dropIfExists('employees');
    }
}
