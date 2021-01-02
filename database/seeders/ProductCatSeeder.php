<?php

namespace Database\Seeders;

use App\Models\ProductCat;
use Illuminate\Database\Seeder;

class ProductCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    ProductCat::create([
        'name'=>'laptops',
        'is_active'=>'1'
    ]);
    ProductCat::create([
        'name'=>'cameras',
        'is_active'=>'1'
    ]);
    ProductCat::create([
        'name'=>'mobiles',
        'is_active'=>'1'
    ]);
    ProductCat::create([
        'name'=>'screens',
        'is_active'=>'1'
    ]);
    ProductCat::create([
        'name'=>'appliances',
        'is_active'=>'1'
    ]);
    }
}
