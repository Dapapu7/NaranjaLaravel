<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->bigInteger('id_worker')->primary()->autoIncrement();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->string('dni');
            $table->string('address');
            $table->string('num_ss');
            $table->longText('task');
            $table->decimal('salary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workers');
    }
}
