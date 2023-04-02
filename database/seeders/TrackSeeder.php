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
    public function run()
    {
        // for($i = 0; $i < 50; $i++){
            
        // }
        $track = new Track;
        $track->title = "Nome";
        $track->album = "Nome_Almbum";
        $track->author = "Nome_Autore";
        $track->editor = "Nome_Editore";
        $track->length = 3.45;
        $track->poster = "poster.png";
        $track->save();
    }
}