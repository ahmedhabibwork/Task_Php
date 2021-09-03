<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actions')->insert([
            [
            'id'=>1,
            'name' => 'Call',
            'status' => 1
                ],
            [
                'id'=>2,
                'name' => 'Follow Up',
                'status' => 1],
            [
                'id'=>3,
                'name' => 'Visit',
                'status' => 1
            ]

        ]);
    }
}
