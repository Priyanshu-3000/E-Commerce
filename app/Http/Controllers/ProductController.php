<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $Product = Product::all();
      
        return view('admin.product', compact('Product'));
    }

    public function product()
    {
        $Product = Product::all();
      
        return view('Product', compact('Product'));
    }

    public function Productsave(Request $request)
    {
        $Product= new Product; 
        $Product ->name =$request->name;
        $Product ->price =$request->price;
        if($request->has('image'))
        {
            $filename = $request->file('image')->store('Product');
            $Product->image=$filename;
        }
        $Product ->save();
        return redirect(url('adminproduct')); 
    }
    
    public function Productedit($id) 
    {
        $editProduct = Product::find($id);
        return view('admin.product',compact('editProduct'));  
    }
    public function Productupdate(Request $request,$id)
    {
       
        $Product = Product::find($id); 
        $Product->name =$request->name;
        $Product ->price =$request->price;
        if($request->has('image'))
        {
            $filename = $request->file('image')->store('Product');
            $Product->images=$filename;
        }
        $Product->save();
       
        return redirect(url('adminproduct')); 
    }

    public function Productdelete($id)
    {
        $Product = Product::find($id);  
        $Product->delete();
        return redirect(url('adminproduct')); 
    }






    public function store(Request $request)
    {  
   
        $ProductId = $request->id;
  
        $Product   =   Product::updateOrCreate(
                    [
                     'id' => $ProductId
                    ],
                    [
                    'name' => $request->name, 
                    'price' => $request->price,
                    'image' => $request->image
                    ]);    


        return Response()->json($Product);
    }


    public function show(Request $request)
    {
      
    
    }

    public function edit(Request $request)
    {

    }
    public function update($id ,$req)
    {
        $Product = Product::find ( $req->id );
        $Product->name = $req->name;
        $Product->price = $req->price;
        $Product->image = $req->image;
        $Product->save ();
        return response ()->json ( $Product );
    }
    public function delete(Request $request)
    {

        $id=$request->id;
        Product::where(['id'=>$id])->delete();  

        return redirect(url('adminproduct'));  
    }



}