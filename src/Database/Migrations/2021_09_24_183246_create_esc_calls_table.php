<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esc_calls', function (Blueprint $table) {
            $table->increments('id');
            
            
            $table->string('confidential')->nullable();
            $table->string('maintainence')->nullable();
            $table->string('transportation_unit')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('instrument_serial_no')->nullable();
            $table->string('description_one')->nullable();

            
            $table->json('one_serial')->nullable();
            $table->json('one_indent')->nullable();
            $table->json('one_description')->nullable();
            $table->json('one_qty')->nullable();
            $table->json('one_rmk')->nullable();


            $table->string('description_two')->nullable();
            $table->string('name')->nullable();
            $table->string('rank')->nullable();
            $table->string('transfer_director')->nullable();
            $table->string('phone')->nullable();
            $table->string('date')->nullable();
            $table->string('main_inspector')->nullable();
            $table->string('derector_title')->nullable();
            $table->string('captain')->nullable();
            $table->string('staff_officer_title')->nullable();
            $table->string('secretary_title')->nullable();
            $table->string('confidential_bottom')->nullable();
            $table->string('serial_bottom')->nullable();
            $table->timestamps();
			//add constraint
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('esc_calls');
    }
}
