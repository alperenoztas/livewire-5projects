<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Country;
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
        $continents = [
            ['id' => 1, 'name' => 'Europe'],
            ['id' => 2, 'name' => 'Asia'],
            ['id' => 3, 'name' => 'North America'],
            ['id' => 4, 'name' => 'South America'],
            ['id' => 5, 'name' => 'Australia'],
            ['id' => 6, 'name' => 'Africa'],
            ['id' => 7, 'name' => 'Antarctica'],
        ];
        foreach ($continents as $continent) {
            \App\Models\Continent::factory()->create($continent)
            ->each(function ($c){
                $c->countries()->saveMany(Country::factory(10)->make());
            });
        }
    }
}
