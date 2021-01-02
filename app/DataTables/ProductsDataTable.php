<?php

namespace App\DataTables;

use App\Models\Product;
use App\Models\ProductCat;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ProductsDataTable extends DataTable
{
    

    public function ajax()
    {
        return datatables()
            // ->eloquent(Product::select('id','name','price','created_at','updated_at')) OR
            ->eloquent(Product::select('*'))
            ->make(true);
    }
    public function html()
    {
        return $this->builder()
            ->columns([
                'id',
                'name',
                'price',
                // 'product_cat_id',
                'created_at',
                'updated_at',
            ])
            ->parameters([
                'dom' => 'Bfrtip',
                'buttons' => ['csv', 'excel', 'pdf', 'print', 'reset', 'reload'],
            ])
            ;
    }
}