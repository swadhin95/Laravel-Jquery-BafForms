<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEsc1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esc1', function (Blueprint $table) {
            $table->increments('id');

            $table->string('ref_no')->nullable();
            $table->string('date')->nullable();
            $table->string('description_item')->nullable();
            $table->string('qty')->nullable();
            $table->string('samples_code_no')->nullable();
            $table->string('offer_validity')->nullable();
            $table->string('remarks_one')->nullable();
            $table->string('recommendation_acceptance')->nullable();

            $table->string('table_bottom_comment')->nullable();
            $table->string('rejection')->nullable();

            $table->json('accept_code_no')->nullable();
            $table->json('accept_obsn_sample')->nullable();
            $table->json('accept_rmk')->nullable();
            $table->json('reject_code_no')->nullable();
            $table->json('reject_obsn_sample')->nullable();
            $table->json('reject_rmk')->nullable();

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
        Schema::dropIfExists('esc1');
    }
}
