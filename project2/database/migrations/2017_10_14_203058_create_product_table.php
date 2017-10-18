<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product',function(Blueprint,$table){

           $table->increment('id');
           $table->string('name');
           $table->integer('cat_id');
           $table->integer('partner_id');
           $table->integer('description');
           $table->string('status');
           $table->string('feature');
           $table->float('price');
           $table->float('discount');
           $table->string('file');
          
           $table->string('image')->nullable();
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
        Schema::drop('product');
    }
}
