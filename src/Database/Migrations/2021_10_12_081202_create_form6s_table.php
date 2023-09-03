<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm6sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form6', function (Blueprint $table) {
            $table->increments('id');
    
            $table->string('sec_ser_no')->nullable();
            $table->string('fac_ser_no')->nullable();
            $table->string('work_no')->nullable();
            $table->string('officer_sig')->nullable();
            $table->string('vou_no')->nullable();
            $table->date('date')->nullable();
        
        
            $table->string('sec_no')->nullable();
            
            $table->json('reg_no')->nullable();
            $table->json('part_no')->nullable();
            $table->json('product_name')->nullable();
            $table->json('work_type')->nullable();
            $table->json('store')->nullable();
            $table->json('next_six_month_store')->nullable();
            $table->json('rep_or_build')->nullable();
            $table->json('workable')->nullable();
            $table->json('not_workable')->nullable();
            $table->json('repairable')->nullable();
            $table->json('convert')->nullable();
            $table->json('comment')->nullable();
        
        
            $table->string('sig_bottom_left')->nullable();
            $table->date('date_bottom_left')->nullable();
            $table->string('permissable')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('work_will_be_taken')->nullable();
            $table->string('sig_bottom_middle')->nullable();
            $table->date('date_bottom_middle')->nullable();
            $table->string('work_done')->nullable();
            $table->string('sig_bottom_right_up')->nullable();
            $table->date('date_bottom_right')->nullable();
            $table->string('sig_bottom_right_left')->nullable();
            $table->date('date_bottom_right_left')->nullable();
            $table->string('sig_bottom_right_right')->nullable();
            $table->date('date_bottom_right_right')->nullable();
        
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
        Schema::dropIfExists('form6');
    }
}
