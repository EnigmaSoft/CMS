<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_news', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('category');
            $table->boolean('featured')->default(0);
            $table->string('title', 62);
            $table->string('slug', 62)->unique();
            $table->string('description', 360);
            $table->string('image', 512)->nullable();
            $table->text('content');
            $table->integer('author');
            $table->tinyInteger('state')->default(0);
            $table->boolean('locked')->default(0);
            $table->integer('views')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('web_news')->insert([[
            'category' => 10,
            'featured' => false,
            'title' => 'EnigmaCMS Successfully Installed',
            'slug' => "enigmacms-successfully-installed",
            'description' => "EnigmaCMS is now successfully installed and is fully operational, enjoy~",
            'content' => 'EnigmaCMS is now successfully installed and is fully operational, enjoy~',
            'author' => 0,
            'locked' => true,
            'created_at' => Carbon\Carbon::now(),
        ]]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_news');
    }
}
