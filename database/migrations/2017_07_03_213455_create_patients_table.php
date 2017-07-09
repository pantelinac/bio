<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('date_of_birth',25)->nullable();
            $table->string('address',50)->nullable();
            $table->string('place',30)->nullable();
            $table->string('phone',30)->nullable();
            $table->string('profession',50)->nullable();
            $table->string('blood_type',2)->nullable();
            $table->string('rh',2)->nullable();
            $table->string('drug_susceptibility')->nullable();
            $table->decimal('childbirth', 2, 0)->nullable();
            $table->decimal('abortion', 2, 0)->nullable();
            $table->string('personal_anament')->nullable();
            $table->string('family_anament')->nullable();
            $table->string('date_last_period',25)->nullable();
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
        Schema::drop('patients');
    }
}
