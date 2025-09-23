<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filmek = array();


        $handle = fopen(public_path("movies.txt"), "r");

        while (($line = fgets($handle)) !== false) {
            $data = explode(';', trim($line)); // Trim, hogy eltávolítsuk az extra whitespace-t

            

            $szineszek[] = [  // Helyes tömb hozzáadás
                'name' => $data[0] ?? null,  
                'length' => $data[1] ?? null,
                'categories_id' => $data[2] ?? null,
                'description' => $data[3] ?? null,
                'pic_path' => $data[4] ?? null,
                'release_date' => $data[5] ?? null
                
            ];  
        }

        fclose($handle);
        
        

        foreach ($filmek as $film) {
            $movie = new Movie();
            $movie->name = $film['name'];
            $movie->length = $film['length'];
            $movie->categories_id = $film['categories_id'];
            $movie->description = $film['description'];
            $movie->pic_path = $film['pic_path'];
            $movie->release_date = $film['release_date'];
            $movie->save();
            
        }
    }
}
