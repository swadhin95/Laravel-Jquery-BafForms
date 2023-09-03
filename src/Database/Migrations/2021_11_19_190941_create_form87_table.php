<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm87Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form87', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();

            $table->string('serial_no')->nullable();
            $table->string('serial_date')->nullable();
            $table->string('voucher_no')->nullable();
            $table->string('voucher_date')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('area_section')->nullable();

            $table->json('section_no')->nullable();
            $table->json('part_no')->nullable();
            $table->json('details')->nullable();
            $table->json('stock_workable')->nullable();
            $table->json('stock_base_repairable')->nullable();
            $table->json('stock_depo_repairable')->nullable();
            $table->json('stock_useless')->nullable();
            $table->json('quality_control_workable')->nullable();
            $table->json('quality_control_base_repairable')->nullable();
            $table->json('quality_control_depo_repairable')->nullable();
            $table->json('quality_control_useless')->nullable();
            $table->json('unclassified')->nullable();

            $table->string('officer_in_charge_sign')->nullable();
            $table->string('chief_inspection_officer_sign')->nullable();

            $table->string('error_cause')->nullable();
            $table->string('error_reason')->nullable();
            $table->string('value_of_error')->nullable();
            $table->string('value_of_error_taka')->nullable();
            $table->string('value_of_error_poisa')->nullable();
            $table->string('disposal_recommendation')->nullable();
            $table->string('chief_technical_officer_sign')->nullable();
            $table->string('approved')->nullable();
            $table->string('captain_sign')->nullable();

            $table->string('bought_charge_sign')->nullable();
            $table->string('bought_charge_date')->nullable();
            $table->string('out_charge_sign')->nullable();
            $table->string('out_charge_date')->nullable();

            $table->string('Bought_out_date')->nullable();
            $table->string('officer_in_charge_sign_area')->nullable();
            $table->string('section_law_no')->nullable();
            $table->string('presentation_detail')->nullable();
            $table->string('hander')->nullable();
            $table->string('quarter')->nullable();
            $table->string('pound')->nullable();

            $table->string('recorded_sign')->nullable();
            $table->string('recorded_date')->nullable();
            $table->string('recorded_date_bottom')->nullable();
            $table->string('acting_officer_sign')->nullable();
            $table->string('when_where')->nullable();
            $table->string('Payment_details')->nullable();

            $table->string('officer_in_charge_bottom_sign')->nullable();
            $table->string('officer_in_charge_bottom_date')->nullable();
            $table->string('serial_no_bottom')->nullable();
        
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
        Schema::dropIfExists('form87');
    }
}
