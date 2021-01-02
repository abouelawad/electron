<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ProductsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index(ProductsDataTable $dataTable)
    {
        return $dataTable->render('admin\products\index');
    }
    
}
 