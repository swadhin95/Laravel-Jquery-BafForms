<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm530Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form530', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('item_no_of_contact');
            $table->string('baf_ref_no');
            $table->string('description_of_articles');
            $table->string('quantity_submitted_by_contractor');
            $table->string('approved');
            $table->string('rejected');
            $table->string('rate');
            $table->string('value');
            $table->string('remarks');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
            //add constraint
            $table->unique('uuid');
            $table->timestamps();
        });
    }

     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form530');
    }
}
