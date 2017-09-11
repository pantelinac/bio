<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatern1Table extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('patern', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ultrasonographic_finding', 255);
            $table->string('speculators_finding', 255);
            $table->string('gin_palp_finding', 255);
            $table->string('diagnosis', 255);
            $table->string('therapy', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('patern');
    }

}
