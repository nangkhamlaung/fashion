<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\facades\Route;
use App\Item;
use App\Brand;
use App\Category;
use App\Subcategory;
class PageController extends Controller
{
    public function mainfun($value='')
    {	
    	// $route = Route::current();
    	// dd($route);
    	//dd->die();
        $categories=Category::All();
        $subcategories=Subcategory::All();
                $items=Item::All();
    	return view('frontend.main',compact('categories','subcategories','items'));

    }
    public function brandfun($value='')
    {
    	return view('frontend.brand');
    }
    public function itemdetailfun($value='')
    {
    	return view('frontend.itemdetail');
    }
     public function loginfun($value='')
    {
         $categories=Category::All();

    	return view('frontend.login',compact('categories'));
    }
    public function promotionfun($value='')
    {	
    	
    	return view('frontend.promotion');
    }
    public function registerfun($value='')
    {   
        
        return view('frontend.register');
    }
    public function logoutfun($value='')
    {   
       
        return view('frontend.logout');
    }
    public function shoppingcartfun($value='')
    {   
        $categories=Category::All();
        $subcategories=Subcategory::All();
        $items=Item::All();
        return view('frontend.shoppingcart',compact('categories','subcategories','items'));
    }
    public function subcategoryfun($value='')
    {   
        
        return view('frontend.subcategory');
    }
    
}
