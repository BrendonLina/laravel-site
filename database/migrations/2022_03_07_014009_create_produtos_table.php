<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column:'categoria_id')->constrained();
            $table->string(column:'name');
            $table->text(column:'description');
            $table->boolean(column:'exclusive');
            $table->timestamps();
            $table->softDeletes();

            // $table->foreing(column:'category_id')->references(column:'id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
