<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // Assumption pre-filled
    // TODO Create a seeder(9scenarios)
    public function up()
    {
        Schema::create('student_units', function (Blueprint $table) {
            $table->integer('student_number');
            $table->string('unit_code');
            $table->boolean('status')->nullable(); // dependent on marks pass or fail
            $table->string('class')->nullable(); // dependent on column marks(Repeat,Retake,Special)
            $table->float('marks');
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
        Schema::dropIfExists('student_units');
    }
}
