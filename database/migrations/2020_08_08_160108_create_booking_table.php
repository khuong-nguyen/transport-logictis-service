<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('booking_no')->unique();
            $table->string('virtual_booking_id');
            $table->string('tvvd');
            $table->string('por_1');
            $table->string('por_2');
            $table->string('pol_1');
            $table->string('pol_2');
            $table->string('pod_1');
            $table->string('pod_2');
            $table->string('del_1');
            $table->string('del_2');
            $table->string('r_d_term_1');
            $table->string('r_d_term_2');
            $table->string('b_l_no');
            $table->boolean('si');
            $table->boolean('brd');
            $table->boolean('fh');
            $table->string('cmdt_1');
            $table->string('cmdt_2');
            $table->integer('weight');
            $table->string('unit');
            $table->string('lofc_1');
            $table->string('lofc_2');
            $table->datetime('sailling_due_date');
            $table->string('pick_up_cy');
            $table->datetime('pick_up_dt');
            $table->string('full_return_cy');
            $table->string('bkg_contact_name');
            $table->string('bkg_contact_email');
            $table->string('bkg_contact_tel');
            $table->string('ext_remark');
            $table->string('int_remark');
            $table->integer('shipper_id');
            $table->integer('forwarder_id');
            $table->integer('consignee_id');
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
        Schema::dropIfExists('booking');
    }
}
