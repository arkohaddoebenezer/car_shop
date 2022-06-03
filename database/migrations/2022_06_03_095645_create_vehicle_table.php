<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('model');
            $table->string('transmission');
            $table->string('type');
            $table->string('fuelType');
            $table->string('no_of_passengers');
            $table->string('front_view');
            $table->string('back_view');
            $table->string('left_side_view');
            $table->string('right_side_view');
            $table->string('interior_view1');
            $table->string('interior_view2');
            $table->string('interior_view3');
            $table->string('interior_view4');
            $table->string('interior_view5');
            $table->timestamps();
        });
        Schema::table('vehicle', function (Blueprint $table) {
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
        Schema::dropIfExists('vehicle');
    }
}
