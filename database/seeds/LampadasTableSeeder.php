<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LampadasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('lampadas')->insert([
    		[
    			'nome' => 'sala',
    			'status' => 0,
    		],
    		[
    			'nome' => 'quarto',
    			'status' => 0,
    		],
    		[
    			'nome' => 'banheiro',
    			'status' => 0,
    		],
    		[
    			'nome' => 'areadeservico',
    			'status' => 0,
    		]

    	]);
    }
}
