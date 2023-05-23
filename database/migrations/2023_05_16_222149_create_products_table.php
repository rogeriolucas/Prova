<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(1);
           $table->foreignId('store_id')
           ->constraine->cascadeOnDelete();
           
            $table->string('Instituiçao_financeira');
            $table->string('name: Banco PingApp');
           $table->string('credito pessoal');
           $table->string('creito consignado')   ;
           
           
           $table->id(2);
           $table->foreignId('store_id');
           $table->string('Instituiçao financeira');
           $table->string('name:Financeira Assert');   
           
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
        Schema::dropIfExists('products');
    }
}
