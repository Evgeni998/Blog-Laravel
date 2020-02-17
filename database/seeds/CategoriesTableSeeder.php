<?php

use Illuminate\Database\Seeder;
use App\Categories;
class CategoriesTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create(array('category_title' => 'HealthCare'));
        Categories::create(array('category_title' => 'Finances'));
        Categories::create(array('category_title' => 'Sports'));
    }
}
