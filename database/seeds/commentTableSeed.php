<?php

use App\Comments;
use Illuminate\Database\Seeder;

class commentTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Comments::truncate(50);

        factory(Comments::class)->create();
    }
}
