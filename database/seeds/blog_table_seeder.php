<?php

use Illuminate\Database\Seeder;
use App\Model\Blog;
class blog_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Factory
        factory(Blog::class , 40)->create();
    }
}
