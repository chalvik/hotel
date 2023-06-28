<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_navigation_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pid')->nullable()->comment('Родитель ');
            $table->bigInteger('hotel_id')->nullable()->comment('Идентификатор отеля ');
            $table->bigInteger('navigation_id')->nullable()->comment('Меню навигации');

            $table->string('name')->comment('Пункт меню ');
            $table->string('url')->nullable()->comment('Ссылка');
            $table->bigInteger('hotel_page_id')->nullable()->comment('Связь с текстовой страницей');
            $table->boolean('enabled')->comment('Активный пункт меню');
            $table->softDeletes();
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
        Schema::dropIfExists('hotel_navigation_items');
    }
};
