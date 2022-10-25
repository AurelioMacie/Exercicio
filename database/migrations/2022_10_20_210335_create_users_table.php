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
			$table->string('nuit', 14)->unique()->nullable();
			$table->string('name', 100);
			$table->string('phone', 13);
			$table->date('birth')->nullable();
			$table->char('gender', 1)->nullable();
			$table->text('notes')->nullable();
			$table->string('email', 80)->unique();
			$table->string('password', 250)->nullable();
			$table->string('status')->default('active');
			$table->string('permission')->default('app.user');
			$table->rememberToken();
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
		
		Schema::table('users', function(Blueprint $table) {
			
		});

		Schema::drop('users');
	}
}
