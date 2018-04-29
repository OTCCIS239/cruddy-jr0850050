<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dice', function (Blueprint $table) {
                $table->increments('id');
                $table->char('name',50);
                $table->integer('size');
                $table->char('material',50);
                $table->char('description')->nullable();
                $table->decimal('price',5,2);
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
        Schema::dropIfExists('dice');
    }
}
