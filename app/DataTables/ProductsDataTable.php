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
        ->eloquent(Product::select('id','name','price')) 
        ->addColumn('action' , function($row) {
            return "<a href= '".route('local.set' , $row->id)."' class ='btn btn-sm btn-success'>Show</a>
                <a href= '#' class ='btn btn-sm btn-info' >Edit</a>
                <a href= '#' class ='btn btn-sm btn-danger' >Delete</a>" ;
            })
            ->make(true);
    }
        #//! FOR DELETE BUTTON
        // ->addColumn('action', function($row){
        //            $idx = $row->id;
        //             $btn = "<a href='javascript:void(0)' id='delete' data-id='$idx' class='edit btn btn-danger btn-sm'>$idx</a>";
        
    public function html()
    {
        return $this->builder()
            ->columns([
                'id',
                'name',
                'price',
                'action',
                // 'product_cat_id',
                // 'created_at',
                // 'updated_at',
            ])
            ->parameters([
                'dom' => 'Bfrtip',
                'buttons' => ['csv', 'excel', 'pdf', 'print', 'reset', 'reload'],
            ])
            ;
    }
}