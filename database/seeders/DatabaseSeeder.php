<?php

namespace Database\Seeders;

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
        \App\Models\Type::factory(5)->create();
        //\App\Models\Region::factory(5)->create();
        //\App\Models\Nft::factory(15)->create();
        //\App\Models\User::factory(10)->create();
        /*$this->call([
            NftSeeder::class
        ]);*/

    }
}
