<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{


    public function run()
    {
        // \App\Models\Personnel::factory(10)->create();
        \App\Models\User::factory(1)->create();
    }
}
