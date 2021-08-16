<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healths', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('anxiety')->default('no');
            $table->string('depression')->default('no');
            $table->string('guilt')->default('no');
            $table->string('fear')->default('no');
            $table->string('suicidal')->default('no');

            $table->string('physicalabuse')->default('no');
            $table->string('sexualabuse')->default('no');
            $table->string('psychologicalabuse')->default('no');
            $table->string('deprivation')->default('no');

            $table->string('previouscounselling')->default('no');
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
        Schema::dropIfExists('healths');
    }
}
