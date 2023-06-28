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
        Schema::create('page_template_block', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('page_template_id')->comment('Шаблон страницы');
            $table->bigInteger('page_block_template_id')->nullable()->comment('Шаблон блока');
            $table->integer('order')->nullable()->comment('Сортировка');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_template_block');
    }
};
