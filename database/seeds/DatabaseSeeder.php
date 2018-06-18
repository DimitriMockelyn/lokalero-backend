<?php

use Illuminate\Database\Seeder;
use App\Equivalence;
use App\Location;
use App\Project;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EquivalenceTableSeeder::class);
        $this->call(LocationTableSeeder::class);
        $this->call(ProjectTableSeeder::class);

    }
}
