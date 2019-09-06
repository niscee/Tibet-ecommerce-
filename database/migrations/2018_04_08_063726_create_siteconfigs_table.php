<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteconfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siteconfigs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cname');
            $table->string('address');
            $table->string('emailone');
            $table->string('emailtwo');
            $table->integer('phone');
            $table->string('fblink');
            $table->string('twitterlink');
            $table->string('googlelink');
            $table->string('instalink');
            $table->string('utubelink');
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
        Schema::dropIfExists('siteconfigs');
    }
}
