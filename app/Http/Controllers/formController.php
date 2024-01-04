<?php

namespace App\Http\Controllers;
use App\Models\form;
use Illuminate\Http\Request;

class formController extends Controller
{
    public function form()
    {
        $form = form::all();

        return view('form', compact('form'));
    }

    // public function product()
    // {
    //     $Product = Product::all();

    //     return view('Product', compact('Product'));
    // }

    public function save(Request $request)
    {
        $form= new form; 
        $form ->name =$request->name;
        $form-> email = $request -> email;
        $form-> number = $request -> number;
        $form-> passsword = $request -> passsword;
        $form-> Gender = $request -> Gender;
        $form->Qualification  = $request -> Qualification;
        $form->dob  = $request -> dob;
        $form->color  = $request -> color;
        $form->language  = $request -> language;
   if($request->has('file'))
        {
            $filename = $request->file('file')->store('form');
            $form->file=$filename;
        }
        $form ->save();
    
        return redirect(url('form')); 
    }

    public function formedit($id)
    {
        $editform = form::find($id);
        return view('form',compact('editform'));  
    }
    public function formupdate(Request $request,$id)
    {

        $form = form::find($id); 
        $form ->name =$request->name;
        $form-> email = $request -> email;
        $form-> number = $request -> number;
        $form-> passsword = $request -> passsword;
        $form-> Gender = $request -> Gender;
        $form->Qualification  = $request -> Qualification;
        $form->dob  = $request -> dob;
        $form->color  = $request -> color;
        $form->language  = $request -> language;
        if($request->has('file'))
        {
            $filename = $request->file('file')->store('form');
            $form->file=$filename;
        }
        $form->save();

        return redirect(url('form')); 
    }

    public function formdelete($id)
    {
        $form = form::find($id);  
        $form->delete();
        return redirect(url('form')); 
    }
}
