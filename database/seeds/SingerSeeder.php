<?php

use Illuminate\Database\Seeder;
use App\Models\Singer;
use App\Models\Song;

class SingerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Singer::class, 10)->create()->each(function ($singer) {
            //create 5 posts for each user
            factory(Song::class, 10)->create(['singer_id' => $singer->id]);
        });
    }
}
