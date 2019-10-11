<?php

use Illuminate\Database\Seeder;
use Admins\Models\Admin;

class Admins extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       for ($i = 1 ; $i<10;$i++){
           Admin::create([
               "name"=> "safwat".$i
           ]);
       }
    }
}
