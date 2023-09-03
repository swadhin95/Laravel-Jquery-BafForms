<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm675Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form675', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');

            $table->string('ser_no')->nullable();
            $table->string('date_of_voucher')->nullable();
            $table->string('receipt_voucher_no')->nullable();
            $table->string('unit_flt_sec_id')->nullable();
            $table->string('unit_flt_sec_name')->nullable();
            $table->unsignedBigInteger('base_id')->nullable();
            $table->string('base_name')->nullable();
            $table->string('fin_year')->nullable();
            $table->string('name_of_user')->nullable();
            $table->string('rank')->nullable();
            $table->string('recipient_signature')->nullable();
            $table->string('recipient_date')->nullable();
            $table->string('consent_of_returner_deposit_amount')->nullable();
            $table->string('sign_of_recorded_stock')->nullable();
            $table->string('date_of_recorded_stock')->nullable();
            $table->string('sign_of_corrected_ledger')->nullable();
            $table->string('date_of_corrected_ledger')->nullable();
            $table->json('ref_no')->nullable();
            $table->json('description_of_goods')->nullable();
            $table->json('unit')->nullable();
            $table->json('qty_workable')->nullable();
            $table->json('qty_repairable')->nullable();
            $table->json('stock_record_card_posted')->nullable();
            $table->json('reason_for_refund')->nullable();

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
        Schema::dropIfExists('form675');
    }
}
