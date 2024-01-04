<?php

namespace App\Http\Controllers;
use  App\Models\invoice;
use Illuminate\Http\Request;

class invoiceController extends Controller
{
    public function index(){
  
            return view('index');
    }

    public function store(Request $request){
        // dd($request);
        $Description = json_encode($request->Description);
        $Quantity = json_encode($request->Quantity);
        $Rate=json_encode( $request->Rate);
        
       
        foreach($request as $key => $invoice)
        {
            $invoice->submit($request->request->all());
            // $invoice['Description'] = $Description;
            // $invoice['Quantity '] = $Quantity[$key];
            // $invoice['Rate'] = $Rate[$key];
            
            $store=invoice::create($invoice);
        
        }
// foreach( $request->inputs as $key=> $invoice){
//     dd($invoice);
//     invoice:: create($invoice);
// }
//         // $invoice = new ;
//         // $invoice ->Description = $request['Description'];
//         // $invoice ->Quantity = $request['Quantity'];
//         // $invoice ->Rate = $request['Rate'];
//         // $invoice-> save();
//     return back()->with('sucess','Invoice Added');


    }
}
