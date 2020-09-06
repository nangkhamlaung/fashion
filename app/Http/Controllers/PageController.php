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
        $brands=Brand::All();
        $categories=Category::All();
        $subcategories=Subcategory::All();
        $items=Item::All();
    	return view('frontend.main',compact('brands','categories','subcategories','items'));

    }
    public function brandfun($id)
    {
         $brand=Brand::find($id);
            $subcategories=Subcategory::All();
            $categories=Category::All();
         $items=Item::All();
    	return view('frontend.brand',compact('brand','items','categories','subcategories'));
    }
   
    public function itemdetailfun($id)
    {
        $item=Item::find($id);
        $categories=Category::All();
        $subcategories=Subcategory::All();
    	return view('frontend.itemdetail',compact('item','categories','subcategories'));
    }
     public function loginfun($value='')
    {
         $categories=Category::All();

    	return view('frontend.login',compact('categories'));
    }
    public function promotionfun($value='')
    {	$items=Item::All();
    	$categories=Category::All();
        $subcategories=Subcategory::All();
    	return view('frontend.promotion',compact('categories','subcategories','items'));
    }
    public function registerfun($value='')
    {   
         $categories=Category::All();

        return view('frontend.register',compact('categories'));
    }
    
    public function shoppingcartfun($value='')
    {   
        $categories=Category::All();
        $subcategories=Subcategory::All();
        $items=Item::All();
        return view('frontend.shoppingcart',compact('categories','subcategories','items'));
    }
    public function subcategoryfun($id)
    {   
          $categories=Category::All();
          $subcategory=Subcategory::find($id);
          $items=Item::All();
          $subcategories=Subcategory::All();
        return view('frontend.subcategory',compact('categories','subcategory','items','subcategories'));
    }
    
}
// 