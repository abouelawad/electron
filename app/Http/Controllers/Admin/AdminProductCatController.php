<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCat;
use Illuminate\Http\Request;


class AdminProductCatController extends Controller
{
    public function create()
    {
        return view('admin.productcats.create');
    }

    public function store(Request $request)
    {
       $data = ($request->all());
        // ProductCat::create([
        //     'name' => [
        //         'en' => $request->enName,
        //         'ar' => $request->arName
        //     ],
        // ]);
        ProductCat::create($data);
    }
}
