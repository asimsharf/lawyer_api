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
        // $this->call(UsersTableSeeder::class);
        factory(App\Model\Countery::class, 20)->create();
        factory(App\Model\City::class, 200)->create();
        factory(App\Model\DocumentType::class, 20)->create();
        factory(App\Model\Document::class, 200)->create();
        // factory(App\Model\Lawyer::class, 50)->create();
    }
}
