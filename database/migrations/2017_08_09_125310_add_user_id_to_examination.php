<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToExamination extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('examinations', function (Blueprint $table) {
            $table->integer('user_id')->nullable()->after('patient_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('examinations', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }

}
