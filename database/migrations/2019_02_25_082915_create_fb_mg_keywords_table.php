<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFbMgKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fb_mg_keywords', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('fbpage_id');
			$table->text('keyword');
			$table->integer('mgresponse_id');
			$table->integer('defcus');
			$table->integer('match')->default(0);
			$table->integer('open')->default(1);
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
        Schema::dropIfExists('fb_mg_keywords');
    }
}
