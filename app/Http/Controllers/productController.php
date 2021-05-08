<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Config;


class productController extends Controller
{

    public function getAll()
        {
            
           $products = Product::all(); 
            
            if(empty($products))
             {
                 return response()->json($products, 204);
                
             }
               
           //return  response()->json($products, 200);
            return view('user.Galerie', compact('products'));
        }


   public function getOne($id)
      {
          $product = Product::find($id);
       
          if($product === null)
          {
              return response()->json($product,404);
          }
            
           //  return response()->json($product, 200);
          return view('user.product', compact('product'));
        
      }

    
   
}
