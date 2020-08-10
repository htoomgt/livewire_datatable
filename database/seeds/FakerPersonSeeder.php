<?php

use Illuminate\Database\Seeder;

class FakerPersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\FakePerson::class, 500)->create();
    }
}
