<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->bigInteger('id_restaurant')->primary()->autoIncrement();
            $table->string('name');
            $table->string('phone_number');
            $table->string('address');
            $table->longText('url');
            $table->longText('description')->nullable();
            $table->longText('photo')->nullable();

            $table->unsignedBigInteger('workers_id');
            $table->foreign('workers_id')
                  ->references('id_worker')
                  ->on('workers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
