<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('staff_id')->nullable();
            $table->integer('days_present')->default('0')->nullable();
            $table->integer('days_early')->default('0')->nullable();
            $table->integer('days_late')->default('0')->nullable();
            $table->integer('jan')->default('0')->nullable();
            $table->integer('feb')->default('0')->nullable();
            $table->integer('march')->default('0')->nullable();
            $table->integer('april')->default('0')->nullable();
            $table->integer('may')->default('0')->nullable();
            $table->integer('june')->default('0')->nullable();
            $table->integer('july')->default('0')->nullable();
            $table->integer('august')->default('0')->nullable();
            $table->integer('september')->default('0')->nullable();
            $table->integer('october')->default('0')->nullable();
            $table->integer('november')->default('0')->nullable();
            $table->integer('december')->default('0')->nullable();



            $table->string('date')->default("")->nullable();
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
