<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Category::class,5)->create();

        //one-to-many relationship with saveMany()method
        //Created 2 records of categories
        factory(App\Category::class,2)->create()->each(function ($category){
        	//see the relation with 3 subcategories
        	$subcategories=factory(App\Subcategory::class,3)->make();
        	$category->subcategories()->saveMany($subcategories);
        	 
        });
    }
}
