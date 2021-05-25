<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->bigInteger('id_animal')->primary()->autoIncrement();
            $table->string('name');
            $table->string('gender');
            $table->string('family');
            $table->longText('description')->nullable();
            $table->longText('photo')->nullable();

            $table->unsignedBigInteger('enclosures_id');
            $table->foreign('enclosures_id')
                  ->references('id_enclosure')
                  ->on('enclosures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
