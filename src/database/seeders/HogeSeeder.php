<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HogeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_ranks')->insert(['id' => 1,'rank_name' => 'bronze']);
        DB::table('m_ranks')->insert(['id' => 2,'rank_name' => 'silver']);
        DB::table('m_ranks')->insert(['id' => 3,'rank_name' => 'gold']);

        DB::table('m_members')->insert(['id' => 1,'name' => 'alpha', 'rank_id' => 2]);
        DB::table('m_members')->insert(['id' => 2,'name' => 'bravo', 'rank_id' => 1]);
        DB::table('m_members')->insert(['id' => 3,'name' => 'charlie', 'rank_id' => 3]);

    }
}
