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
        $this->call(JalurSeeder::class);
        $this->call(PerlengkapanSeeder::class);
        $this->call(ReguSeeder::class);
        $this->call(PendakianSeeder::class);
    }
}
