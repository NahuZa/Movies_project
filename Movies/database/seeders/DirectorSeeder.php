<?php

namespace Database\Seeders;

use Directory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rendezok = array();


        $handle = fopen(public_path("movies.txt"), "r");

        while (($line = fgets($handle)) !== false) {
            $data = explode(';', trim($line)); // Trim, hogy eltávolítsuk az extra whitespace-t

            

            $rendezok = [  // Helyes tömb hozzáadás
                'name' => $data[0] ?? null,  
                
            ];  
        }

        fclose($handle);
        
        

        foreach ($rendezok as $ren) {
            $director = new Directory();
            $director->name = $ren['name'];
            $director->save();
           
        }
    }
}
