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
         $this->call(MarcasSeeder::class);
        $this->call(VehiculosSeeder::class);
        $this->call(PersonasSeeder::class);
    }
}
