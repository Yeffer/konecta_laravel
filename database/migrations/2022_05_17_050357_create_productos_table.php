<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('referencia');
            $table->integer('precio');
            $table->integer('peso');
            $table->integer('stock');
            $table->unsignedBigInteger('categoria_id');            
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();             

            $table->foreign('categoria_id')
                ->references('id')
                ->on('categorias');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
