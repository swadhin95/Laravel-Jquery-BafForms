<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm674Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form674', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');

            $table->string('ser_no')->nullable();
            $table->string('machine')->nullable();
            $table->string('date_of_voucher')->nullable();
            $table->string('major')->nullable();
            $table->string('issue_voucher_no')->nullable();
            $table->string('fin_year')->nullable();
            $table->string('model_prepare_date')->nullable();
            $table->string('index_page')->nullable();
            $table->string('to_no')->nullable();
            $table->string('another_date')->nullable();
            $table->json('ref_no')->nullable();
            $table->json('description_of_goods')->nullable();
            $table->json('demand')->nullable();
            $table->json('issue')->nullable();
            $table->json('posted')->nullable();
            $table->json('important_data')->nullable();
            $table->string('rank')->nullable();
            $table->string('rank_date')->nullable();
            $table->string('sign_of_flight')->nullable();
            $table->string('date_of_flight')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();

            $table->timestamps();
            //add constraint
             $table->unique('uuid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form674');
    }
}
