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
        Schema::create('hotel_rooms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('building_id')->nullable()->comment('Корпус ');

            $table->string('title')->comment('Заголовок ');
            $table->text('content')->comment(' Контент ');
            $table->integer('room_class_id')->comment(' Класс комнаты  ');
            $table->string('image')->nullable()->comment('Картинка ');

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
        Schema::dropIfExists('hotel_rooms');
    }
};
