<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFbMgResponsesTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fb_mg_responses_texts', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('fbpage_id');
			$table->text('mgtype');	
			$table->text('mgtag')->nullable();
			$table->text('mgtext');	
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
        Schema::dropIfExists('fb_mg_responses_texts');
    }
}
