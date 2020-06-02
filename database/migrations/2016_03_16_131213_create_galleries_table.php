<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            
                $table->increments('id');
                $table->string('image_uri',50)->nullable();
                $table->integer('admin_id')->unsigned();
                $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('galleries');
    }
}
