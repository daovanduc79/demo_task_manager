<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'customer_id' => '10',
            'name' => 'duc',
            'email' => 'duc@gmail.com',
            'phone' => '+0932623218',
            'address' => 'ha noi'
        ]);
    }
}
