<?php

use Illuminate\Database\Seeder;
use App\User;

class usertableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Factory
        factory(User::class , 50)->create();
    }
}
