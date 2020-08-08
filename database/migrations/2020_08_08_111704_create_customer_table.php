<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_legal_english_name');
            $table->string('customer_language_name')->nullable();
            $table->string('customer_address')->nullable();
            $table->string('customer_code')->unique();
            $table->string('fax')->nullable();
            $table->string('tel')->nullable();
            $table->string('tax_code')->nullable();
            $table->string('country_code');
            $table->string('city');
            $table->string('location_code');
            $table->string('zip_code')->nullable();
            $table->string('post_office_box')->nullable();
            $table->string('sale_office_code');
            $table->string('sale_rep_code');
            $table->string('customer_type');
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
        Schema::dropIfExists('customer');
    }
}
