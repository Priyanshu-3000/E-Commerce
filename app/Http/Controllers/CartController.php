<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function ProductCart()
    {
        return view('Cart');
    }
    public function addtoCart($id)
    {
        $Product = Product::findOrFail($id);

        
        if(!empty($Product)){
            // dd($Product);
            $data = new cart;
            $data->name = $Product->name;
            $data->quantity = 1;
            $data->price = $Product->price;
            $data->image = $Product->image;
            $data->save();
            
        }
        $cart = session()->get('cart',[]);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            return redirect('Cart');
        
        } else {
            $cart[$id] = [
                "name" => $Product->name,
                "quantity" => 1,
                "price" => $Product->price,
                "image" => $Product->image
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product has been added to cart!');
    }
    
    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Product added to cart.');
        }
    }
  
    public function deleteProduct($id)
    {
       // dd($name);
        if($id) {
            $cart = session()->get('cart');
           
            if(isset($cart[$id])) 
            {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            return redirect()->back();
            //session()->flash('success', 'Product successfully deleted.');
        }
    }
}
