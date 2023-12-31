<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCafeteriansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cafeterians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_name');
             $table->text('item_text');
              $table->integer('item_number');
             $table->VARCHAR('item_human');
           
             $table->int('item_amount');
            $table->string('item_img');
             $table->datetime('published');
            
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
        Schema::dropIfExists('cafeterians');
    }
}
