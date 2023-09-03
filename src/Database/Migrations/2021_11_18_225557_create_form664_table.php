<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateForm664Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form664', function (Blueprint $table) {
                $table->increments('id');
                $table->uuid('uuid')->unique();
    
                $table->string('cash_voucher_no')->nullable();
                $table->string('issue_voucher_no')->nullable();
                $table->string('account_period')->nullable();

                $table->string('base')->nullable();
                $table->string('unit')->nullable();
    
                $table->string('stock_record_initials')->nullable();
                $table->string('stock_record_date')->nullable();
                $table->string('entered_initials')->nullable();
                $table->string('entered_date')->nullable();
                $table->string('issuing_officer_date')->nullable();
                $table->string('issuing_officer_sign')->nullable();

                $table->string('received_taka')->nullable();
                $table->string('received_taka_in_words')->nullable();
                $table->string('account_officer_date')->nullable();
                $table->string('account_officer_sign')->nullable();

                $table->string('issue_voucher_no_b')->nullable();
                $table->string('Period_of_account')->nullable();

                $table->string('base_b')->nullable();
                $table->string('unit_b')->nullable();
                $table->string('flight_or_section')->nullable();
                $table->string('date_internal_payment')->nullable();
                $table->string('date_value')->nullable();
                $table->string('flight_or_section_sign')->nullable();

                $table->string('commanding_officer_date')->nullable();
                $table->string('date_value_commanding')->nullable();
                $table->string('commanding_officer_sign')->nullable();

                $table->string('value_of_taka')->nullable();
                $table->string('value_of_paisa')->nullable();
                $table->string('debited_value')->nullable();
                $table->string('total_value')->nullable();
                $table->string('month_period_value')->nullable();
                $table->string('imprest_holder_sign')->nullable();
                $table->string('unit_b_bottom')->nullable();

                $table->string('stock_record_initials_b')->nullable();
                $table->string('stock_record_date_b')->nullable();
                $table->string('accounting_initials')->nullable();
                $table->string('accounting_date')->nullable();
                $table->string('equipment_officer_sign')->nullable();

                $table->string('charge_per_man')->nullable();
                              
                $table->json('name')->nullable();
                   
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
        Schema::dropIfExists('form664');
    }
}
