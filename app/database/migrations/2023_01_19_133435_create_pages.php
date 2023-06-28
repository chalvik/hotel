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
        Schema::create('hotel_pages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pid')->nullable()->comment('Идентификатор родительской страницы');
            $table->bigInteger('hotel_id')->comment('Идентификатор отеля');
            $table->boolean('main')->default(false)->comment('Основная страница');
            $table->string('title')->comment('Заголовок страницы');
            $table->string('slug')->comment('Slug');
            $table->string('content')->nullable()->comment('Slug');

            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_keywords')->nullable();
            $table->bigInteger('template_id')->nullable();

            $table->bigInteger('version_owner_id')->unsigned()->comment('id первой версия');
            $table->bigInteger('version_name')->comment('Версия');
            $table->boolean('version_current')->default(false)->comment('Текущая запись');

            $table->boolean('published')->default(false)->comment('Опубликована');

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
        Schema::dropIfExists('pages');
    }
};
