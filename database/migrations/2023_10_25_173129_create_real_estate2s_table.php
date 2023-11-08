<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_estate2s', function (Blueprint $table) {
            $table->id();
            $table->string('number_of_offer')->unique();
            $table->text('address');
            $table->string('price');
            $table->string('kindOfPrice');
            $table->string('fieldDelegate');
            $table->date('date');
            $table->string('images');
            $table->string('images_2')->nullable();
            $table->unsignedBigInteger('Real_estate_id');
            $table->foreign('Real_estate_id')->references('id')->on('real_estates');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('citiess');
            $table->string('zone');
            $table->string('neighborhood');
            $table->string('floors');
            $table->string('numberOfRooms');
            $table->string('numberOfEntrances');
            $table->string('elevators');
            $table->string('bathrooms');
            $table->string('numberOfLivingrooms');
            $table->string('kindOfStairs');
            $table->string('theYard');
            $table->string('interFace');
            $table->string('widthOfStreet');
            $table->string('ageOfRealEstate');
            $table->string('barking');
            $table->string('Maid_s_room');
            $table->string('security_room');
            $table->string('Driver_s_room');
            $table->string('space');
            $table->string('Swimming_pools');
            $table->string('piece_number');
            $table->string('the_owner_s_name');
            $table->string('owner_s_phone_number');
            $table->string('security_name');
            $table->string('security_number');
            $table->string('coordinates');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->date('date2');
            $table->string('notes');
            $table->string('Special_note');
            $table->string('user');
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
        Schema::dropIfExists('real_estate2s');
    }
};
