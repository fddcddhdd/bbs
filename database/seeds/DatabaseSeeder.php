<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // スレ板
        DB::table('threads')->insert([
            'title' => "テスト用スレ",
        ]);
        // 初投稿
        DB::table('posts')->insert([
            'thread_id' => 1,
            'name' => "テスト用投稿者",
            'content' => "初投稿！",
        ]);
        DB::table('posts')->insert([
            'thread_id' => 1,
            // 'name' => "テスト用投稿者",
            'content' => "2ゲット！",
        ]);
    }
}
