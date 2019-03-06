<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFbMgResponsesListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fb_mg_responses_lists', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('fbpage_id');
			$table->text('mgtype');	
			$table->text('mgtag');	
			$table->text('mgtopstyle');	
			$table->text('mgetitle1');
			$table->text('mgesubtitle1');
			$table->text('mgeimageurl1');
			$table->integer('mgebtn1_id')->nullable();
			$table->text('mgetitle2');
			$table->text('mgesubtitle2');
			$table->text('mgeimageurl2');
			$table->integer('mgebtn2_id')->nullable();
			$table->text('mgetitle3')->nullable();
			$table->text('mgesubtitle3')->nullable();
			$table->text('mgeimageurl3')->nullable();
			$table->integer('mgebtn3_id')->nullable();
			$table->text('mgetitle4')->nullable();
			$table->text('mgesubtitle4')->nullable();
			$table->text('mgeimageurl4')->nullable();
			$table->integer('mgebtn4_id')->nullable();
			$table->integer('mgbtn1_id')->nullable();
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
        Schema::dropIfExists('fb_mg_responses_lists');
    }
}
