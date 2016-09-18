<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //seed posts
        DB::table('posts')->delete();
        factory(App\Post::class, 20)->create();
    }
}
