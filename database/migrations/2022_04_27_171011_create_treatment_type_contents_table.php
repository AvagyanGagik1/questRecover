<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentTypeContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatment_type_contents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('treatment_type_id')->unsigned();
            $table->text('text');
            $table->string('block_name');
            $table->timestamps();

            $table->foreign('treatment_type_id')
                ->on('treatment_types')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treatment_type_contents');
    }
}
