<?php
namespace App\Http\Controllers;

use \App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $category = Category::all();
        return view('category', compact('category'));
    }

    public function categorysave(Request $request)
    {
        $category = new Category; 
        $category->name =$request->name;
        if($request->has('img'))
        {
            $filename = $request->file('img')->store('category');
            $category->images=$filename;
        }
        $category->save();
        return redirect('category1'); 
    }

    public function categoryedit($id)
    {
        $editcategory = Category::find($id);
        return view('category',compact('editcategory'));  
    }

    public function categoryupdate(Request $request,$id)
    {
       
        $category = Category::find($id); 
        $category->name =$request->name;
        if($request->has('img'))
        {
            $filename = $request->file('img')->store('category');
            $category->images=$filename;
        }
        $category->save();
       
        return redirect('category1'); 
    }

    public function categorydelete($id)
    {
        $category = Category::find($id);  
        $category->delete();
        return redirect('category1'); 
    }
}
