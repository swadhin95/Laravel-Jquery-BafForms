<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoSheetEscsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_sheet_escs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('info_title')->nullable();
            $table->string('scale_officer')->nullable();
            $table->string('scale_officer_value')->nullable();
            $table->string('scale_cadets')->nullable();
            $table->string('scale_cadets_value')->nullable();
            $table->string('scale_airmen')->nullable();
            $table->string('scale_airmen_value')->nullable();
            $table->string('scale_airmen_value_two')->nullable();
            $table->string('scale_recruits')->nullable();
            $table->string('scale_recruits_value')->nullable();
            $table->string('strength_officers')->nullable();
            $table->string('strength_officers_value')->nullable();
            $table->string('strength_cadets')->nullable();
            $table->string('strength_cadets_value')->nullable();
            $table->string('strength_airmen')->nullable();
            $table->string('strength_airmen_value')->nullable();
            $table->string('strength_recruits')->nullable();
            $table->string('strength_recruits_value')->nullable();
            $table->string('yearly_rec')->nullable();
            $table->string('yearly_rec_value')->nullable();
            $table->string('three_yearly_rec')->nullable();
            $table->string('three_yearly_rec_value')->nullable();
            $table->string('avg_yr_costume')->nullable();
            $table->string('avg_yr_costume_value')->nullable();
            $table->string('per_stock')->nullable();
            $table->string('per_stock_value')->nullable();
            $table->string('dues_in')->nullable();
            $table->string('dues_in_value')->nullable();
            $table->string('int_qty_procure')->nullable();
            $table->string('int_qty_procure_value')->nullable();
            $table->string('esc_rec_qty')->nullable();
            $table->string('esc_rec_qty_value')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('info_sheet_escs');
    }
}
