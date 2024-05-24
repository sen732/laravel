<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanitationFacilitiesTable extends Migration
{
    public function up()
    {
        Schema::create('sanitation_facilities', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('facility_type');
            $table->integer('capacity');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sanitation_facilities');
    }
};
