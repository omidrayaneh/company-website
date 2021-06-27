<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('company');
            $table->string('address');
            $table->string('phone');
            $table->boolean('status')->default(0);

            $table->unsignedBigInteger('industry_id')->nullable();
            $table->foreign('industry_id')->references('id')->on('industries');

            $table->unsignedBigInteger('machine_id')->nullable();
            $table->foreign('machine_id')->references('id')->on('machines');

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
        Schema::dropIfExists('orders');
    }
}
