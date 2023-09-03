<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm600ATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('form600A', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            
            $table->string('unit')->nullable();
            $table->string('date')->nullable();
            $table->string('sheet_no')->nullable();
            $table->string('product_count_date')->nullable();
            $table->string('ref_no')->nullable();
            $table->string('section_product_description')->nullable();
            $table->string('section_unit_of_goods')->nullable();
            $table->string('storage_wh_workable')->nullable();
            $table->string('storage_wh_repairable')->nullable();
            $table->string('stock_temporary_workable')->nullable();
            $table->string('stock_workable')->nullable();
            $table->string('stock_repairable')->nullable();
            $table->string('total_stock_workable')->nullable();
            $table->string('total_stock_repairable')->nullable();
            $table->string('stock_record_workable')->nullable();
            $table->string('stock_record_repairable')->nullable();
            $table->string('quotes_workable')->nullable();
            $table->string('quotes_repairable')->nullable();
            $table->string('deficit_workable')->nullable();
            $table->string('deficit_repairable')->nullable();
            $table->string('remarks')->nullable();

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
        Schema::dropIfExists('form600A');
    }
}
