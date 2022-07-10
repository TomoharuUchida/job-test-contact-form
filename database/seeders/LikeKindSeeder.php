<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikeKindSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('like_kinds')->insert(
            [
                [
                    'kind' => '和食',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kind' => '洋食',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kind' => '中華',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kind' => 'エスニック',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
