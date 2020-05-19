<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEnumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('enums', function(Blueprint $table)
		{
			$table->foreign('product_id', 'enums_ibfk_1')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('enums', function(Blueprint $table)
		{
			$table->dropForeign('enums_ibfk_1');
		});
	}

}
