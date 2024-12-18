<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvUploadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_upload', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('rank')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp_phone')->nullable();
            $table->date('man_dob')->nullable();
            $table->string('age')->nullable();
            $table->string('email_address')->nullable();
            $table->string('experience')->nullable();
            $table->string('last_sign_of')->nullable();
            $table->string('cv_file')->nullable();
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
        Schema::dropIfExists('cv_upload');
    }
}
