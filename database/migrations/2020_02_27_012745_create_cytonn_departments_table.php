<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCytonnDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cytonn_departments', function (Blueprint $table) {
            $table->bigIncrements('department_id');
            $table->string('departmentname');
            $table->string('department_head_email')->unique();
            $table->string('department_head_lastname');
            $table->string('department_head_firstname');
            $table->string('lastname');
            $table->string('firstname');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cytonn_departments');
    }
}
