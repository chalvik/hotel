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
        Schema::create('hotel_slider_items', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('hotel_slider_id')->comment('Идентификатор слфйдера');
            $table->string('title')->comment('Заголовок страницы');
            $table->string('url')->nullable();
            $table->text('content')->nullable();
            $table->string('image');

            $table->bigInteger('version_owner_id')->unsigned()->comment('id первой версия');
            $table->bigInteger('version_name')->comment('Версия');
            $table->boolean('version_current')->default(false)->comment('Текущая запись');

            $table->bigInteger('created_by')->comment('Пользователь ');
            $table->bigInteger('updated_by')->comment('Пользователь ');

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
        Schema::dropIfExists('hotel_slider_items');
    }
};
