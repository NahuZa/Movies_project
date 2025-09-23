<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        public function run(): void
    {
        $kategoriak = array();


        $handle = fopen(public_path("genres.txt"), "r");

        while (($line = fgets($handle)) !== false) {
            $data = explode(';', trim($line)); // Trim, hogy eltávolítsuk az extra whitespace-t

            

            $kategoriak[] = [  // Helyes tömb hozzáadás
                'category' => $data[0] ?? null,  
                
                
            ];  
        }

        fclose($handle);
        
        

        foreach ($kategoriak as $kategoria) {
            $category = new Category();
            $category->category = $kategoria['category'];
            $category->save();
            
        }
    }
}