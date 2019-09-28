<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
            $table->text('banner_text')->nullable();
            $table->string('video_caption')->nullable();
            $table->string('video_link')->nullable();
            $table->text('video')->nullable();
            $table->integer('enable_video')->default(0);
            $table->enum('video_choice_toggle',['video_url','video_file'])->nullable();
            $table->integer('position')->default(0);
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
        Schema::dropIfExists('banners');
    }
}
