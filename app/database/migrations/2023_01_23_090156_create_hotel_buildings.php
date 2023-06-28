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
        Schema::create('hotel_buildings', function (Blueprint $table) {
            $table->id();

            $table->string('title')->comment('Заголовок ');
            $table->text('content')->comment(' Контент ');
            $table->integer('building_class_id')->comment(' Класс корпуса ');

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
        Schema::dropIfExists('hotel_buildings');
    }
};
