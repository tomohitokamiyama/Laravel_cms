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
              $table->string('item_number');//予算
             $table->string('item_human');//人数キャパ
           
             $table->integer('item_amount');
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
