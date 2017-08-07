<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFoToExaminationTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('examinations', function (Blueprint $table) {
            $table->string('Fo', 10)->nullable()->after('Ex_Fe_Ha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('examinations', function (Blueprint $table) {
            $table->dropColumn('Fo');
        });
    }

}
