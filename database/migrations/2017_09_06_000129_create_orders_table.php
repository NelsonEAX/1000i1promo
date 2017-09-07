<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /** ЗАКАЗЫ */
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone')->comment('Контактный телефон');
            $table->string('date')->comment('Дата доставки');
            $table->string('adres')->comment('Адрес доставки');
            $table->timestamps();
            $table->softDeletes();
        });

        /** ХРАНИЛИЩЕ ФАЙЛОВ */
        Schema::create('storages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order')->nullable()->index('order')->comment('Ссылка на заказ');
            $table->string('name', 255);
            $table->string('ext', 10);
            $table->string('uuid', 36);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
        Schema::dropIfExists('storages');
    }
}
