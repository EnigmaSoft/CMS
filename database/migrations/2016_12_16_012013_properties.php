<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Properties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_properties', function (Blueprint $table) {
            $table->text('name');
            $table->boolean('type')->default(0);
            $table->float('version')->default(0.62);
            $table->tinyInteger('exprate');
            $table->tinyInteger('mesorate');
            $table->tinyInteger('droprate');
            $table->text('client');
            $table->text('server');
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
        Schema::dropIfExists('web_properties');
    }
}
