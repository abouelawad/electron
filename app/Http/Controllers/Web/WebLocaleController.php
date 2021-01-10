<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class WebLocaleController extends Controller
{
    public function setLang($locale , Request $request)
    {
        // dd($locale);
        $langs = ['en' , 'ar'];
        if(in_array($locale , $langs)){
            
            App::setLocale($locale);
            $request->Session()->put('locale' , $locale);
            return back() ;
        }else
        return back();
    }

    public function test()
    {
        return 'test';
    }
}
