<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Accounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accounts', function (Blueprint $table) {
            //$table->increments('id');
            //$table->string('name', 13)->unique();
            //$table->string('password', 128);
            //$table->string('salt', 32)->nullable();
            //$table->date('birthday');
            //$table->boolean('banned')->default(0);
            //$table->tinyInteger('loggedin')->default(false);
            //$table->text('banreason')->nullable();
            //$table->boolean('gm')->default(0);
            //$table->string('email', 128);
            //$table->string('emailcode', 40)->nullable();
            //$table->integer('forumaccid')->nullable();
            //$table->macAddress('macs')->nullable();
            //$table->ipAddress('lastknownip');
            //$table->integer('paypalNX')->default(0);
            //$table->integer('mPoints')->default(0);
            //$table->integer('cardNX')->default(0);
            //$table->tinyInteger('pin')->nullable();
            //$table->boolean('gender')->default(0);
            $table->rememberToken();
            $table->boolean('verified')->default(0);
            $table->boolean('active')->default(0);
            $table->integer('mainchar')->nullable();
            //$table->timestamp('lastlogin')->nullable();
            $table->timestamp('lastweblogin')->nullable();
            $table->ipAddress('lastwebip')->nullable();
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
        Schema::table('accounts', function (Blueprint $table) {
            $table->dropRememberToken();
            $table->removeColumn('verified');
            $table->removeColumn('active');
            $table->removeColumn('mainchar');
            $table->removeColumn('lastweblogin');
            $table->removeColumn('lastwebip');
            $table->dropTimestamps();
        });
    }
}
