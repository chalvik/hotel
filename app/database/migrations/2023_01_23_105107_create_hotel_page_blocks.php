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
        Schema::create('hotel_page_blocks', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('hotel_page_id')->comment('Идентификатор страницы');
            $table->integer('block_template_id')->comment('Идентификатор шаблона блока');
            $table->string('title')->comment('Заголовок');
            $table->string('sub_title')->comment('Под заголовок');
            $table->text('content')->comment('Контент блока');
            $table->string('url')->comment('Ссылка Api или ммылка на карртинку');

            $table->integer('order')->default(0)->comment('Сортировка');

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
        Schema::dropIfExists('hotel_page_blocks');
    }
};
