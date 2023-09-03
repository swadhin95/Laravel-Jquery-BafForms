<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm10289Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form10289', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();

            $table->string('base')->nullable();
            $table->string('from_time')->nullable();
            $table->string('to_time')->nullable();
            $table->string('to_date')->nullable();
            $table->string('greenwich_time')->nullable();

            $table->string('temp_one_k')->nullable();
            $table->string('temp_twenty_five_k')->nullable();
            $table->string('temp_two_k')->nullable();
            $table->string('temp_thirty_k')->nullable();
            $table->string('temp_three_k')->nullable();
            $table->string('temp_thirty_five_k')->nullable();
            $table->string('temp_five_k')->nullable();
            $table->string('temp_fourty_k')->nullable();
            $table->string('temp_seven_k')->nullable();
            $table->string('temp_fourty_five_k')->nullable();
            $table->string('temp_ten_k')->nullable();
            $table->string('temp_fifty_k')->nullable();
            $table->string('temp_fifteen_k')->nullable();
            $table->string('temp_fifty_five_k')->nullable();
            $table->string('temp_twenty_k')->nullable();
            $table->string('temp_sixty_k')->nullable();

            $table->string('lower_lower_hight')->nullable();
            $table->string('lower_surface_hight')->nullable();
            $table->string('upper_lower_hight')->nullable();
            $table->string('upper_surface_hight')->nullable();

            $table->string('sight_range')->nullable();
            $table->string('weather')->nullable();
            $table->string('forcast_ten_miles')->nullable();
            $table->string('forcast_next_twentyfour')->nullable();

            $table->string('mintra_feet')->nullable();
            $table->string('mintra_meter')->nullable();
            $table->string('freezing_feet')->nullable();
            $table->string('freezing_meter')->nullable();
            $table->string('avg_lowest_sea_level_feet')->nullable();
            $table->string('avg_lowest_sea_level_meter')->nullable();

        
            
            $table->json('date')->nullable();
            $table->json('dawn')->nullable();
            $table->json('sunrise')->nullable();
            $table->json('sunset')->nullable();
            $table->json('twilight')->nullable();
            $table->json('moonrise')->nullable();
            $table->json('moonset')->nullable();
            $table->json('crescent')->nullable();

            $table->string('issue_time')->nullable();
            $table->string('issue_date')->nullable();
            $table->string('air_force_base')->nullable();
            $table->string('predictor_signature')->nullable();
            $table->string('baf_serial_no')->nullable();

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
        Schema::dropIfExists('form10289');
    }
}
