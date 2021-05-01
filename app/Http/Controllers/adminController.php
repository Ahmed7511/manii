<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
       // auth()->user()->assignRole('admin');   pour donner le role admin
        return view('admin.index');
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
        
        //return view('admin.index');
      
       return response()->json($product, 201);
    }
}
