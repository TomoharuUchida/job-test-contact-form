<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // テーブルから全てのレコードを削除し、自動増分idをゼロにリセット
        // 外部キー制約で参照されているとエラーが出る
        // DB::table('like_kinds')->truncate();

        $this->call([
            LikeKindSeeder::class,
        ]);
    }
}
