<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorys = [
            [
                'Cname' => 'Liquid',
                'Cslug' => 'liquid-vape',
            ],
            [
                'Cname' => 'Detergen',
                'Cslug' => 'liquid-detergen',
            ],
            [
                'Cname' => 'Rokok',
                'Cslug' => 'rokok',
            ],
            
        ];
        foreach ($categorys as $categories) { 
            // dd($category);
            $category =  new Category();

            $category->Cname = $categories['Cname'];
            $category->Cslug = $categories['Cslug'];

            $category->save();
        }
        
    }
}
