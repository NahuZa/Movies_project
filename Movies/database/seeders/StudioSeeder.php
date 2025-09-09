<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studiok = array();


        $handle = fopen(public_path("studios.txt"), "r");

        while (($line = fgets($handle)) !== false) {
            $data = explode(';', trim($line)); // Trim, hogy eltávolítsuk az extra whitespace-t

            

            $filmek[] = [  // Helyes tömb hozzáadás
                'name' => $data[0] ?? null,  
                
            ];  
        }

        fclose($handle);
        
        

        foreach ($studiok as $stud) {
            $studio = new Studio();
            $studio->name = $stud['name'];
            $studio->save();

        }
    }
}
