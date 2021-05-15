<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->string('original_name');
            $table->boolean('type')->default(0);//1 = main page image
            $table->boolean('status')->default(0);//1 = enable show image
            $table->boolean('main_page')->default(0);//1 = enable show image in main page
            $table->longText('detail')->nullable();//main page image detail
            $table->string('title')->nullable();//main page image title
            $table->string('place')->nullable();//main page image place
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('photos');
    }
}
