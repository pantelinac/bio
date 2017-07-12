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
            $table->string('ultrasonographic_finding')->nullable();
            $table->string('speculators_finding')->nullable();
            $table->string('gin_palp_finding')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('therapy')->nullable();
            $table->string('note')->nullable();
            
            //First spec controll
            $table->decimal('CRL', 4, 0)->nullable();
            $table->decimal('BPD', 4, 0)->nullable();
            $table->decimal('Hem', 4, 0)->nullable();
            $table->decimal('OFD', 4, 0)->nullable();
            $table->decimal('HC', 4, 0)->nullable();
            $table->decimal('FL', 4, 0)->nullable();
            $table->decimal('AC', 4, 0)->nullable();
            $table->decimal('TM', 6, 2)->nullable();
            
            $table->decimal('NT', 4, 0)->nullable();
            $table->decimal('NB', 4, 0)->nullable();
            $table->decimal('FMU', 6, 2)->nullable();
            $table->string('PKDV', 100)->nullable();
            $table->string('TSR', 100)->nullable();
            $table->decimal('FHR', 6, 2)->nullable();
            $table->decimal('AFI', 6, 2)->nullable();
            $table->string('Ins_tro')->nullable();
            $table->string('FD')->nullable();
            $table->string('AK_PAL', 100)->nullable();
            
            //Second spec controll
            $table->decimal('Biometry', 6, 2)->nullable();
            $table->decimal('Va', 4, 0)->nullable();
            $table->decimal('Vp', 4, 0)->nullable();
            $table->decimal('IOD', 4, 0)->nullable();
            $table->decimal('TCD', 4, 0)->nullable();
            $table->decimal('CM', 4, 0)->nullable();
            $table->decimal('NN', 4, 0)->nullable();
            $table->decimal('HL', 4, 0)->nullable();
            $table->decimal('cerviks', 4, 0)->nullable();
            
            $table->string('Ins_pos')->nullable();
            $table->string('Pupil')->nullable();
            $table->string('Ex_Fe_Ha')->nullable();
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
