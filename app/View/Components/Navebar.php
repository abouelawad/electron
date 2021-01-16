<?php

namespace App\View\Components;

use App\Models\ProductCat;
use Illuminate\View\Component;

class Navebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $cats = ProductCat::where('is_active' , 1)->get();
        // dd($cats);
        return view('components.navebar' , compact('cats'));
    }
}
