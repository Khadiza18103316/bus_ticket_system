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
            $table->string('bus_name');
            $table->integer('bus_no');
            $table->string('bus_type');
            $table->time('bus_route_time');
            $table->date('bus_route_date');
            $table->string('bus_departure_from');
            $table->string('bus_departure_to');
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
