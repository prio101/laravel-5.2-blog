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
         $this->call(usertableseeder::class);
         $this->call(blog_table_seeder::class);
        $this->call(commentTableSeed::class);

    }
}
