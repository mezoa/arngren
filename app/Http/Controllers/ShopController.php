<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->query("page");
        $size = $request->query("size");
        if(!$page)
            $page = 1;
        if(!$size)
            $size = 12; 
            $order = $request->query("order");
            if(!$order)
              $order = -1;
            $o_column = "";
            $o_order = "";
            switch($order)
            {
            case 1:
                  $o_column = "created_at";
                  $o_order = "DESC";
                  break;
            case 2:
                  $o_column = "created_at";
                  $o_order = "ASC";
                  break;
            case 3:
                  $o_column = "regular_price";
                  $o_order = "ASC";
                  break;  
            case 4:
                  $o_column = "regular_price";
                  $o_order = "DESC";
                  break;
            default:
                  $o_column = "id";
                  $o_order = "DESC";
      
            }   
            
            $brands = Brand::orderBy('name','ASC')->get();    
            $q_brands = $request->query("brands");
            $categories = Category::orderBy("name","ASC")->get();
            $q_categories = $request->query("categories"); 
            $productsQuery = Product::query();

            if (!empty($q_brands)) {
            $brandIds = explode(',', $q_brands);
            $productsQuery->where(function($query) use($brandIds){
                $query->whereIn('brand_id', $brandIds);
                });
            }

             // Add this block to filter products by category
            if (!empty($q_categories)) {
                $categoryIds = explode(',', $q_categories);
                $productsQuery->whereHas('category', function ($query) use ($categoryIds) {
                    $query->whereIn('id', $categoryIds);
                });
            }

        $products = $productsQuery->orderBy('created_at','DESC')->orderBy($o_column,$o_order)->paginate($size);

        return view('shop',['products'=>$products,'page'=>$page,'size'=>$size,'order'=>$order,'brands'=>$brands,'q_brands'=>$q_brands,'categories'=>$categories,'q_categories'=>$q_categories]);    
    }
    public function productDetails($slug)
    {
        $product = Product::where('slug',$slug)->first();
        $rproducts = Product::where('slug','!=',$slug)->inRandomOrder('id')->get()->take(8);   
        return view('details',['product'=>$product,'rproducts'=>$rproducts]);
    }

    
}
