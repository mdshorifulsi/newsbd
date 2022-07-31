<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNamajsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('namajs', function (Blueprint $table) {
            $table->id();
            $table->string('fojor')->nullable();
            $table->string('johor')->nullable();
            $table->string('asor')->nullable();
            $table->string('magrib')->nullable();
            $table->string('Esha')->nullable();
            $table->string('jummah')->nullable();
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
        Schema::dropIfExists('namajs');
    }
}
