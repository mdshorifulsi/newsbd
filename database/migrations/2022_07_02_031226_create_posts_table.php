<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('subdistrict_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('title_bn');
            $table->string('title_en');
            $table->string('image');
            $table->string('image_title')->nullable();
            $table->text('details_bn');
            $table->text('details_en')->nullable();
            $table->text('tags_bn');
            $table->text('tags_en')->nullable();
            $table->string('headline')->nullable();
            $table->string('first_section')->nullable();
            $table->string('first_section_thumbnail')->nullable();
            $table->string('big_thumbnail')->nullable();
            $table->string('post_date');
            $table->string('post_month');
            $table->integer('status')->default(1);
            
            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('subcategory_id')
            ->references('id')->on('sub_categories')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('district_id')
                ->references('id')->on('districts')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('subdistrict_id')
            ->references('id')->on('sub_districts')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');

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
        Schema::dropIfExists('posts');
    }
}
