<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersFbAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_fb_accounts', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id');
			$table->text('fbid');
			$table->text('token');
			$table->text('longtoken');
			$table->text('gender')->nullable();
			$table->text('birthday')->nullable();
			$table->text('age')->nullable();
			$table->text('link')->nullable();
			$table->text('likes')->nullable();
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
        Schema::dropIfExists('users_fb_accounts');
    }
}
