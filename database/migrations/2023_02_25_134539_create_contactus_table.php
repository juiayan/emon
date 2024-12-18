<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactus', function (Blueprint $table) {
            $table->id();
            $table->longText('address');
            $table->string('phone_one');
            $table->string('phone_two')->nullable();
            $table->string('phone_three')->nullable();
            $table->string('phone_four')->nullable();
            $table->string('email_one');
            $table->string('email_two')->nullable();
            $table->string('email_three')->nullable();
            $table->string('email_four')->nullable();
            $table->tinyInteger('location_id')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('contactus');
    }
}
