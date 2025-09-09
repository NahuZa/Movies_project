<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $szineszek = array();


        $handle = fopen(public_path("actors.txt"), "r");

        while (($line = fgets($handle)) !== false) {
            $data = explode(';', trim($line)); // Trim, hogy eltávolítsuk az extra whitespace-t

            

            $filmek[] = [  // Helyes tömb hozzáadás
                'name' => $data[0] ?? null,  
                'gender' => $data[1] ?? null,
                
            ];  
        }

        fclose($handle);
        
        

        foreach ($szineszek as $szinesz) {
            $actor = new Actor();
            $actor->name = $szinesz['name'];
            $actor->gender = $szinesz['gender'];
            $actor->save();

        }
    }
}
