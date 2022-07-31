<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_districts', function (Blueprint $table) {
            $table->id();
            $table->string('district_id');
            $table->string('subdisname_bn');
            $table->string('subdisname_en');
            $table->string('subdis_bn_slug')->nullable();
            $table->string('subdis_en_slug')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('sub_districts');
    }
}
