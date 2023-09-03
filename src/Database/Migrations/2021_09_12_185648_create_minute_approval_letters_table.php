<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinuteApprovalLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minute_approval_letters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('confidential')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('title')->nullable();
            $table->string('serial_no_center')->nullable();
            $table->string('ref_field')->nullable();
            $table->string('equip_sele_tit')->nullable();
            $table->string('equip_sele_tit_val')->nullable();
            $table->string('name')->nullable();
            $table->string('rank')->nullable();
            $table->string('division')->nullable();
            $table->string('ext')->nullable();
            $table->string('date')->nullable();
            $table->string('acas')->nullable();
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
        Schema::dropIfExists('minute_approval_letters');
    }
}
