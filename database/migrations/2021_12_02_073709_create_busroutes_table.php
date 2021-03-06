<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusroutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('busroutes', function (Blueprint $table) {
            $table->id();
            $table->integer('bus_no');
            $table->string('bus_type');
            $table->string('location_from');
            $table->string('location_to');
            $table->string('bus_route_time');
            $table->date('bus_route_date');
            $table->string('bus_departure_from');
            $table->string('bus_departure_to');
            $table->integer('bus_fare');
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
        Schema::dropIfExists('busroutes');
    }
}
