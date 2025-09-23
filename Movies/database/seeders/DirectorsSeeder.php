<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DirectorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rendezok = array();


        $handle = fopen(public_path("directors.txt"), "r");

        while (($line = fgets($handle)) !== false) {
            $data = explode(';', trim($line)); // Trim, hogy eltávolítsuk az extra whitespace-t

            

            $rendezok[] = [  // Helyes tömb hozzáadás
                'name' => $data[0] ?? null,  
                
                
            ];  
        }

        fclose($handle);
        
        

        foreach ($rendezok as $rendezo) {
            $director = new Director();
            $director->name = $rendezo['name'];
            $director->save();
            
        }
    }
}
