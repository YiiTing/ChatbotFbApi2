<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFbMgPushntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fb_mg_pushnts', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('fbpage_id');
			$table->integer('mgresponse_id');
			$table->text('messageid');
			$table->bigInteger('releasetime');
			$table->integer('releasetimes');
			$table->integer('readtimes');
			$table->integer('releasestatus');
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
        Schema::dropIfExists('fb_mg_pushnts');
    }
}
