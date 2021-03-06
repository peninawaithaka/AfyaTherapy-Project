<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->boolean('is_booked')->default(0);
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
        Schema::dropIfExists('sessions');
    }
}
