<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm34Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form34', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();

            $table->string('base_unit')->nullable();
            $table->string('flight_section')->nullable();
            $table->string('date')->nullable();
            $table->string('year')->nullable();
            $table->string('id_no')->nullable();
            $table->string('financial_year')->nullable();

            $table->string('section')->nullable();
            
            $table->json('part_reference_no')->nullable();
            $table->json('product_des')->nullable();
            $table->json('product_unit')->nullable();
            $table->json('product_number')->nullable();
            $table->json('product_cond')->nullable();
            $table->json('price_in_book')->nullable();
            $table->json('determining_price')->nullable();
            $table->json('price_in_taka')->nullable();
            $table->json('price_in_poisha')->nullable();
            $table->json('search_committee')->nullable();
            $table->json('posted')->nullable();
            $table->json('comment_consideration')->nullable();
            
            $table->string('sign_lost_docu')->nullable();
            $table->string('date_lost_docu')->nullable();
            $table->string('sign_stock')->nullable();
            $table->string('date_stock')->nullable();
            $table->string('sign_usable')->nullable();
            $table->string('date_usable')->nullable();
            $table->string('date_commanding_officer')->nullable();
            $table->string('sign_commanding_officer')->nullable();
            $table->string('sign_bottom_right')->nullable();
            $table->string('baf_press_serial')->nullable();
            
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            
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
        Schema::dropIfExists('form34');
    }
}
