<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Config;

class adminController extends Controller
{
    public function index()
    {
       // auth()->user()->assignRole('admin');   pour donner le role admin
       $products = Product::all(); 
        
       if(empty($products))
        {
            return response()->json($products, 204);
           
        }

     // return  response()->json($products, 200);
     return view('admin.index', compact('products'));
      
    }

   public function getOne($id) 
   {
    $product = Product::find($id);
       
    if($product === null)
    {
        return response()->json($product,404);
    }
      
     //  return response()->json($product, 200);
     return view('admin.update-product', compact('product'));
  
    } 
    
    public function store(Request $request)
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
        
        //return view('admin.index', compact('products'));
      
    //  return response()->json($product, 201);
     return redirect('/admin')->with('success','product Created');
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
        // return response()->json(null, 204);
     return redirect('/admin')->with('success','product deleted');

    }

    
    public function put(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name ;
        $product->price = $request->price ;
        $product->description = $request->description ;
        $image = $request->image ;
        
       
      if($image){
           $imageName = time().'_'.$image->getClientOriginalName();
            $image->move('productImages', $imageName);
            $formInput['image']= $imageName ;
       }
       $product->save();
     return redirect('/admin')->with('success','product updated');

    }
    
     
}
