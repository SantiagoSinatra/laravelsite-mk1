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
    /* Escribimos los cambios que queremos hacerle a la base de datos */
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("p-name");
            $table->integer("p-color");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    /* Le indicamos a laravel como deshacer los cambios. */
    /* tambien puedo usar php artisan migrate:rollback para deshacer los ultimos cambios */
    {
        Schema::dropIfExists('products');
    }
}
