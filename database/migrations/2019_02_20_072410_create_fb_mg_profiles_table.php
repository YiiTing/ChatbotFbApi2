<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFbMgProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fb_mg_profiles', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id');
			$table->integer('fbpage_id');
			$table->text('psid');
			$table->text('firstname');
			$table->text('lastname');
			$table->text('link');
			$table->text('locale')->nullable();
			$table->text('gender')->nullable();
			$table->integer('like')->default(0);
			$table->integer('bot')->default(1);
			$table->integer('block')->default(0);
			$table->bigInteger('interaction');
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
        Schema::dropIfExists('fb_mg_profiles');
    }
}
