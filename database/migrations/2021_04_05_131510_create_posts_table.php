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
            
            $table->enum('type', ['rental', 'sale']);
            $table->string('property');
            $table->string('category');
            $table->string('title');
            $table->text('detail');
            $table->date('date');
            $table->float('price',10,2);
            $table->string('address');
            $table->integer('rooms');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('kitchen');
            $table->integer('living_room');
            $table->integer('dining_room');
            $table->integer('nursey');
            $table->integer('garage');
            $table->integer('livin_room');
            $table->integer('porch');
            $table->float('sqft');
            $table->float('area');
            $table->integer('pets_allowed');
            $table->float('location');
            $table->float('latitude');
            $table->float('longitude');
            $table->string('cover');
            // $table->string('images');
            // $table->string('documents');
            // $table->string('videos');
            // $table->string('pets');
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
