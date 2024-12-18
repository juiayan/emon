<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineAdmisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_admision', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->date('date_of_birth');
            $table->string('user_email');
            $table->longText('present_address')->nullable();
            $table->longText('permanent_address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('guidian_phone')->nullable();
            $table->tinyInteger('sub_class')->nullable();
            $table->tinyInteger('freedom_feighter_family');
            $table->tinyInteger('chose_technology')->nullable();
            $table->string('ssc_exam_result');
            $table->string('ssc_passing_year');
            $table->string('ssc_department');
            $table->string('ssc_role_number')->nullable();
            $table->string('ssc_reg_number')->nullable();
            $table->string('gpa')->nullable();
            $table->string('marksheet_image');
            $table->string('candidate_image');
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
        Schema::dropIfExists('online_admision');
    }
}
