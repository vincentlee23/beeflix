<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Business Proposal',
            'photo' => 'https://upload.wikimedia.org/wikipedia/en/1/19/A_Business_Proposal.jpg',
            'description' => 'In disguise as her friend, Ha-ri shows up to a blind date to scare him away. But plans go awry when he turns out to be her CEO — and makes a proposal.',
            'rating' => 9
        ]);
        
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'What\'s Wrong with Secretary Kim?',
            'photo' => 'https://upload.wikimedia.org/wikipedia/en/1/10/What%27s_Wrong_with_Secretary_Kim.jpg',
            'description' => 'A vainglorious executive who seemingly has everything faces devastating news when his adept personal assistant announces that she\'s decided to quit.',
            'rating' => 9
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Start-Up',
            'photo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/1/12/Start-Up_2020.jpg/250px-Start-Up_2020.jpg',
            'description' => 'Young entrepreneurs aspiring to launch virtual dreams into reality compete for success and love in the cutthroat world of Korea\'s high-tech industry.',
            'rating' => 8
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Phineas and Ferb',
            'photo' => 'https://m.media-amazon.com/images/M/MV5BMTc1NjcxNzg4MF5BMl5BanBnXkFtZTgwOTMzNzgyMDE@._V1_.jpg',
            'description' => 'Phineas and Ferb embark on various adventures during their summer vacation, while trying to keep their sister from interfering with their plans.',
            'rating' => 10
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Disney Big Hero 6 The Series',
            'photo' => 'https://m.media-amazon.com/images/M/MV5BY2FhMjIxZWYtNWNiZC00OThhLTg3MzYtNDAxNjRmMmZkMjZmXkEyXkFqcGdeQXVyNzEzNjU1NDg@._V1_.jpg',
            'description' => 'Hiro and Baymax, along with friends Wasabi, Honey Lemon, Go Go and Fred, form the legendary superhero team Big Hero 6, protecting their city from scientifically-enhanced villains.',
            'rating' => 7
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Disney\'s Kim Possible',
            'photo' => 'https://upload.wikimedia.org/wikipedia/id/8/8e/KPC.jpg',
            'description' => 'A high school cheerleader and her accident-prone best friend balance their duties as global crime-fighters with the typical challenges of adolescence.',
            'rating' => 9
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Vincenzo',
            'photo' => 'https://rijotobing.files.wordpress.com/2021/05/30adbd92-9d51-4299-8eee-79e5766e2d6d.jpeg?w=426',
            'description' => 'During a visit to his motherland, a Korean-Italian mafia lawyer gives an unrivaled conglomerate a taste of its own medicine with a side of justice.',
            'rating' => 10
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Vagabond',
            'photo' => 'https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/indikatornews/2019/12/Vagabond-Poster-4.jpg',
            'description' => 'When his nephew dies in a plane crash, stunt man Cha Dal-geon resolves to find out what happened, with the help of covert operative Go Hae-ri.',
            'rating' => 8
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Squid Game',
            'photo' => 'https://upload.wikimedia.org/wikipedia/id/e/e8/Squid_Game_poster.jpg',
            'description' => 'Hundreds of cash-strapped players accept a strange invitation to compete in children\'s games. Inside, a tempting prize awaits — with deadly high stakes.',
            'rating' => 9
        ]);

        
    }
}
