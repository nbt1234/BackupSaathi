<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_travel', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->references('id')->on('user_models');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('age');
            $table->integer('gender');
            $table->string('language_spoken');
            $table->string('special_needs');
            $table->string('relationship');
            $table->string('status');
            
            $table->string('departure_city');
            $table->string('layover_city');
            $table->string('arrival_city');
            $table->string('airline_name');
            $table->date('departure_date');
            $table->time('departure_time');
            $table->date('departure_start_date');
            $table->date('departure_end_date');
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_travel');
    }
}
