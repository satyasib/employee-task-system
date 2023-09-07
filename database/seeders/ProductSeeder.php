<?php

namespace Database\Seeders;
use App\Models\product;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  
		 for ($i=0; $i < 10; $i++) { 
		 $title = Str::random(12);
         $slug = Str::slug($title);
         $category=product::create([
	        'product_name'=>$title,
			'product_sku'=>Str::random(5),
			'product_slug'=>$slug,
            'category_id'=>Category::all()->random()->id
	   
	   ]);
	    
    }
  }
}
