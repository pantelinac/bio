<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExaminationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('examinations', function (Blueprint $table) {
            //Basic controll
            $table->increments('id');
            $table->string('Exam_type',10)->nullable();
            
            $table->string('ultrasonographic_finding')->nullable();
            $table->string('speculators_finding')->nullable();
            $table->string('gin_palp_finding')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('therapy')->nullable();
            $table->string('note')->nullable();
            
            //First spec controll
            $table->string('CRL', 50)->nullable();
            $table->string('BPD', 50)->nullable();
            $table->string('Hem', 50)->nullable();
            $table->string('OFD', 50)->nullable();
            $table->string('HC', 50)->nullable();
            $table->string('FL', 50)->nullable();
            $table->string('AC', 50)->nullable();
            $table->string('TM', 50)->nullable();
            
            $table->decimal('NT', 4, 0)->nullable();
            $table->string('NB', 50)->nullable();            
            $table->string('FMU', 100)->nullable();
            $table->string('PKDV', 100)->nullable();
            $table->string('TSR', 100)->nullable();
            $table->decimal('FHR', 4, 0)->nullable();
            $table->string('AFI', 100)->nullable();
            $table->string('Ins_tro', 100)->nullable();
            $table->string('FD', 100)->nullable();
            $table->string('AK_PAL')->nullable();
            
            //Second spec controll
            $table->string('Va', 50)->nullable();
            $table->string('Vp', 50)->nullable();
            $table->string('IOD', 50)->nullable();
            $table->string('TCD', 50)->nullable();
            $table->string('CM', 50)->nullable();
            $table->string('NN', 50)->nullable();
            $table->string('HL', 50)->nullable();
            $table->string('cerviks', 50)->nullable();
            
            $table->string('Ins_pos')->nullable();
            $table->string('Pupil')->nullable();
            $table->string('Ex_Fe_Ha')->nullable();
            $table->decimal('Fo', 4, 0)->nullable();
            $table->decimal('Width_of_aorta', 4, 0)->nullable();
            $table->decimal('Pul_tree', 4, 0)->nullable();
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('examinations');
    }

}
