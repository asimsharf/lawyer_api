<?php

use Illuminate\Database\Seeder;

class CounterySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Countery::class, 20)->create();
    }
}
