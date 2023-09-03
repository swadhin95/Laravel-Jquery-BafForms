<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm673Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form673', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('ref_no')->nullable();
            $table->string('product_description')->nullable();
            $table->string('product_unit')->nullable();
            $table->string('returnable_product_amount')->nullable();
            $table->string('repairable_product_ledger')->nullable();
            $table->string('supply_product_amount')->nullable();
            $table->string('usable_product_ledger')->nullable();
            $table->string('reason_for_exchange')->nullable();
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
        Schema::dropIfExists('form673');
    }
}
