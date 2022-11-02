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
        Schema::create('sign_ups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ssc_roll');
            $table->string('ssc_reg');
            $table->string('ssc_gpa');
            $table->string('ssc_passing_year');
            $table->string('ssc_group');
            $table->string('hsc_roll');
            $table->string('hsc_reg');
            $table->string('hsc_gpa');
            $table->string('hsc_passing_year');
            $table->string('hsc_group');
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
        Schema::dropIfExists('sign_ups');
    }
};
