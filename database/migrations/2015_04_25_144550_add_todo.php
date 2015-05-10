<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTodo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('todo')->insert(array(
            'name'=>'ouazi',
            'commentaire'=>'I hope this is working',
            'created_at'=>date('Y-m-d h:m:s'),
            'updated_at'=>date('Y-m-d h:m:s'),
        ));



        DB::table('todo')->insert(array(
            'name'=>'Hicham',
            'commentaire'=>'Yaaay',
            'created_at'=>date('Y-m-d h:m:s'),
            'updated_at'=>date('Y-m-d h:m:s'),
        ));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('todo')->where('name','=','ouazi')->delete();
        DB::table('todo')->where('name','=','Hicham')->delete();
	}

}
