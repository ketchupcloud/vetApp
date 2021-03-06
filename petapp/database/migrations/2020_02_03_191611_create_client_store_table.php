<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_store', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('grade');
            $table->unsignedBigInteger('client_id')->nullable();
            $table->unsignedBigInteger('store_id')->nullable();
            $table->timestamps();
        });

        //Foreign key
        Schema::table('client_store', function (Blueprint $table) {
          $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
          $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_store');
    }
}
