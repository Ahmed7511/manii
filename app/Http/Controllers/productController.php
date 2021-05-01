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

           return  response()->json($products, 200);
          
        }


   public function getOne($id)
      {
          $product = Product::find($id);
       
          if($product === null)
          {
              return response()->json($product,404);
          }
            
             return response()->json($product, 200);
        
      }

    public function post(Request $request)
    {
        $formInput = $request->all();
        //image upload
        $image= $request->image;
        if($image){
            $imageName = time().'_'.$image->getClientOriginalName();
             $image->move('productImages', $imageName);
             $formInput['image']= $imageName ;
        $product = Product::create($formInput);

        }
        
      
       return response()->json($product, 201);
    }

    public function put(Request $request, $id)
    {
        $formInput = $request->all();
        // $request->name = $name ;

        //$price = $request->price ;
       // return $price ;
       //image upload
       //$image= $request->image;
       
    //   if($image){
    //        $imageName = time().'_'.$image->getClientOriginalName();
    //         $image->move('productImages', $imageName);
    //         $formInput['image']= $imageName ;
    //    }
       $product = Product::find($id);
       
          $product->name = $request->input('name');
          $product->price = $request->input('price') ;
          $product->description = $request->input('description') ;
        //   if($request->has('image'))
        //        {
        //            $image->request->file('image');
        //        $imageName = time().'_'.$image->getClientOriginalName();
        //         $image->move('productImages', $imageName);
        //         $formInput['image']= $imageName ;
        //           }
                 return $product;
    //   if($product ===null)
    //   {
    //       $product= Product::create($request->all());
    //       return response()->json($product, 201);
    //   }
    //      $product->update($request->all());
      // return response()->json($product, 200);
     }

    public function delete(Request $request, $id)
    {
        $product = Product::find($id);
        if($product ===null)
        {
            return response()->json($product, 404);
        }
        unlink(public_path('productImages').'/'.$product->image) ;
        
         $product->delete();
         return response()->json(null, 204);
    }
}
