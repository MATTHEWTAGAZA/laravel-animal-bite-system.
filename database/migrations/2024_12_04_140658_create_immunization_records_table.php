<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmunizationRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('immunization_records', function (Blueprint $table) {
            $table->id();
            $table->date('registration_date');
            $table->string('name');
            $table->string('address');
            $table->integer('age');
            $table->enum('sex', ['Male', 'Female']);
            $table->string('place');
            $table->string('type_of_animal');
            $table->string('site');
            $table->enum('category', [1, 2, 3]);
            $table->boolean('washing_of_bite');
            $table->date('dose_1')->nullable();
            $table->date('dose_2')->nullable();
            $table->date('dose_3')->nullable();
            $table->date('dose_4')->nullable();
            $table->date('dose_5')->nullable();
            $table->string('brand_name')->nullable();
            $table->string('outcome')->nullable();
            $table->string('biting_animal_status')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('immunization_records');
    }
}

