<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddViewedAndFreetextToExamination extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('examinations', function (Blueprint $table) {
            $table->string('Viewed')->nullable()->after('patient_id');
            $table->string('Freetext')->nullable()->after('patient_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('examinations', function (Blueprint $table) {
            $table->dropColumn('Viewed');
            $table->dropColumn('Freetext');
        });
    }

}
