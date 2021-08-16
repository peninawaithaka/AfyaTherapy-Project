<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            //patient
            $table->integer('user_id')->unsigned();
            $table->integer('session_id')->unsigned();
            $table->string('therapist');
            $table->string('date');
            $table->integer('starthours');
            $table->integer('startminutes');
            // $table->string('startampm');
            $table->integer('endhours');
            $table->integer('endminutes');
            // $table->string('endampm');
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
        Schema::dropIfExists('appointments');
    }
}
