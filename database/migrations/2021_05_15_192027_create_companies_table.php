<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('companyName');
            $table->string('phone');
            $table->string('supportPhone');
            $table->string('supportPhoneName')->nullable();
            $table->string('email')->unique();
            $table->string('address');
            $table->string('map')->nullable();
            $table->string('aparat')->nullable();
            $table->string('telegram')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('skype')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->boolean('status')->default(0);

            $table->unsignedBigInteger('user_id' );
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
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
        Schema::dropIfExists('companies');
    }
}
