<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
            $table->increments('id');

            $table->string('name', 50);
            $table->char('cpf',11)->unique();
            $table->string('eddress', 40) -> unique();
            $table->char('phone',11)->unique();

            $table->string('email',40)->unique();
            $table->string('password',40)->nullable();


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
        Schema::create('users', function(Blueprint $table) {

        });
		Schema::drop('users');
	}
}
