<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Informant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('web_informant', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name', 256);

             // None(0)
             // Success(1)
             // Info(2)
             // Primary(3)
             // Warning(4)
             // Danger(5)
             $table->tinyInteger('type');
             $table->string('class')->nullable();
             $table->text('message');
             $table->integer('creator');
             $table->timestamps();
             $table->timestamp('expire')->nullable();
             $table->boolean('dismissible')->default(1);
             $table->boolean('active')->default(1);
         });

         DB::table('web_informant')->insert([[
             'name' => "MapleSoul Successful Installation",
             'type' => 1,
             'message' => "MapleSoul is now successfully installed and is fully operational, enjoy~",
             'creator' => 0,
             'dismissible' => 0,
             'active' => true,
         ]]);
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('web_informant');
     }
}
