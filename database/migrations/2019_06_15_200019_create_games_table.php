<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('platform');
            $table->decimal('price');
            $table->date('release_date');
            $table->string('developer');
            $table->string('publisher');
            $table->string('name');
            $table->text('system_requirements');
            $table->text('description_en');
            $table->text('description_ru');
            $table->integer('sold_keys');
            $table->boolean('is_preorder');
            $table->string('image_name');
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
        Schema::dropIfExists('games');
    }
}
