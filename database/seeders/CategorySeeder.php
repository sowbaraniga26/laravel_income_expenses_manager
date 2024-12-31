<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Stationary items'],
            ['name' => 'Snacks items'],
            ['name' => 'Lunch'],
            ['name' => 'Household products'],
            ['name' => 'Petrol'],
            ['name' => 'Car service'],
            
        ];

        foreach ($categories as $row)
        {
            Category::create($row);
        }
    }
}
