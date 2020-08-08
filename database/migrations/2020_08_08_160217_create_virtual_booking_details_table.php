<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVirtualBookingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_booking_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('virtual_booking_id');
            $table->string('container_id');
            $table->integer('vol');
            $table->decimal('eq_sub');
            $table->decimal('soc');
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
        Schema::dropIfExists('virtual_booking_details');
    }
}
