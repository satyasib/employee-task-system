<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $CATEGORY=Category::create([
	        'cat_name'=>'technology',
            'cat_slug'=>Str::slug('technology')
	   
	   ]);
	    $CATEGORY=Category::create([
	       'cat_name'=>'digital',
            'cat_slug'=>Str::slug('digital')
	   
	   ]);
	   
	   
	   $subcat=Subcategory::create([
	        'sub_cat_name'=>'ai',
            'sub_cat_slug'=>Str::slug('ai')
	   
	   ]);
	    $subcat=Subcategory::create([
	       'sub_cat_name'=>'paython',
            'sub_cat_slug'=>Str::slug('paython')
	   
	   ]);
    }
}
