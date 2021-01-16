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
            'name'=>[
                'en' => "laptops",
                'ar' => "لابتوب"
            ],
            'is_active'=>'1'
        ]);
        ProductCat::create([
            'name'=>[
                'en'=>'cameras',
                'ar'=>'كاميرات'
            ],
            'is_active'=>'1'
        ]);
        ProductCat::create([
            'name'=>[
                'en'=>' mobiles',
                'ar'=>'موبايلات'
            ],
            'is_active'=>'1'
        ]);
        ProductCat::create([
            'name'=>[
                    'en' => 'screens',
                    'ar' => 'شاشات'
            ],
            'is_active'=>'1'
        ]);
        ProductCat::create([
            'name'=>[
                    'en' => 'appliances',
                    'ar' => 'الأجهزة'
            ],
            'is_active'=>'1'
        ]);
    }
}
