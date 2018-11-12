<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Category::create(["name" => "CPU"]);
        Category::create(["name" => "GPU"]);
        Category::create(["name" => "MOBO"]);
        Category::create(["name" => "RAM"]);
        Category::create(["name" => "POWER SUPPLY"]);

    }
}
