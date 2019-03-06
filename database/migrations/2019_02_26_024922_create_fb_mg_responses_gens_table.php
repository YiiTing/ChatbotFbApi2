<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFbMgResponsesGensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fb_mg_responses_gens', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('fbpage_id');
			$table->text('mgtype');	
			$table->text('mgtag');	
			$table->text('mgtitle');
			$table->text('mgsubtitle')->nullable();
			$table->text('mgimageurl')->nullable();
			$table->integer('mgbtn1_id')->nullable();
			$table->integer('mgbtn2_id')->nullable();
			$table->integer('mgbtn3_id')->nullable();
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
        Schema::dropIfExists('fb_mg_responses_gens');
    }
}
