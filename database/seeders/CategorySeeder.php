<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert(
            [
                ['name'=>'ACCESSIBILITY'],
                ['name'=>'BEST_PRACTICES'],
                ['name'=>'PERFORMANCE'],
                ['name'=>'PWA'],
                ['name'=>'SEO']
            ]
            );
    }
}
