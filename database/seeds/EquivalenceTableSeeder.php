<?php 


use Illuminate\Database\Seeder;

class EquivalenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Equivalence::class, 50)->create();
    }
}
