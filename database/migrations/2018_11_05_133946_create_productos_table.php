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
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('draw')->nullable();
            $table->string('image')->default('no-image.jpg')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('depth')->nullable();
            $table->string('capacity')->nullable();
            $table->string('bomb')->nullable();
            $table->string('jet')->nullable();
            $table->string('regulator')->nullable();
            $table->string('soup')->nullable();
            $table->string('switch')->nullable();
            $table->string('order')->nullable();
            $table->string('keyword')->nullable();
            $table->integer('id_family');
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
        Schema::dropIfExists('productos');
    }
}
