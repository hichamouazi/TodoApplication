<?php

use Illuminate\Database\Seeder;


Class ItemsTableSeeder extends Seeder {
    public function run()
    {

        DB::table('items')->delete();

        $items = array(
            array(
                'owner_id' => 1,
                'name' => 'Pick up milk',
                'done' => 'false',


            ),

         array(
             'owner_id' => 1,
             'name' => 'Walk The dogs',
             'done' => 'true',


         ),



            array(
                'owner_id' => 1,
                'name' => 'Cook diner',
                'done' => 'false',


            )

        );
        DB::table('items')->insert($items);

    }

}