<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enums', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('product_id')->nullable()->index('product_id');
			$table->string('keys', 30);
			$table->string('value', 30);
			$table->integer('order')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('enums');
	}

}
