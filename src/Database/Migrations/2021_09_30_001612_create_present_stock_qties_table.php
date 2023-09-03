<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresentStockQtiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PresentStockQty', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title')->nullable();

            $table->string('serial_no_one')->nullable();
            $table->string('description_of_items_one')->nullable();
            $table->string('ui_one')->nullable();
            $table->string('mu_baf_one')->nullable();
            $table->string('dues_in_one')->nullable();
            $table->string('bbd_one')->nullable();
            $table->string('bsr_one')->nullable();
            $table->string('zhr_one')->nullable();
            $table->string('mtr_one')->nullable();
            $table->string('present_stock_one')->nullable();
            $table->string('avg_yr_consumption_one')->nullable();

            $table->string('serial_no_two')->nullable();
            $table->string('description_of_items_two')->nullable();
            $table->string('ui_two')->nullable();
            $table->string('mu_baf_two')->nullable();
            $table->string('dues_in_two')->nullable();
            $table->string('bbd_two')->nullable();
            $table->string('bsr_two')->nullable();
            $table->string('zhr_two')->nullable();
            $table->string('mtr_two')->nullable();
            $table->string('present_stock_two')->nullable();
            $table->string('avg_yr_consumption_two')->nullable();

            $table->string('serial_no_three')->nullable();
            $table->string('description_of_items_three')->nullable();
            $table->string('ui_three')->nullable();
            $table->string('mu_baf_three')->nullable();
            $table->string('dues_in_three')->nullable();
            $table->string('bbd_three')->nullable();
            $table->string('bsr_three')->nullable();
            $table->string('zhr_three')->nullable();
            $table->string('mtr_three')->nullable();
            $table->string('present_stock_three')->nullable();
            $table->string('avg_yr_consumption_three')->nullable();
            $table->string('pl_see_excl')->nullable();

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
        Schema::dropIfExists('PresentStockQty');
    }
}
