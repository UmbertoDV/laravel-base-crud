<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Track;

class TrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++){
            $track = new Track;
            $track->title = $faker->streetName();
            $track->album = $faker->state();
            $track->author = $faker->firstNameMale();
            $track->editor = $faker->country();
            $track->length = $faker->randomFloat(2, 0, 5);
            $track->poster = "https://picsum.photos/200/300";
            $track->save();
        }
    }
}