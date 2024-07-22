<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // Ensure the Category model is imported
use Brian2694\Toastr\Facades\Toastr; // Ensure Toastr is imported

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->category;
        $category->save();


        toastr()->timeOut(10000)->closeButton()  ->addsuccess('Category Added Successfully');

        return redirect()->back();
    }

                  public function delete_category($id)


                  {

                               $data = Category::find($id);
                               $data ->delete();
                                
                               toastr()->timeOut(10000)->closeButton()  ->addsuccess('Category deleted  Successfully');

                               return  redirect() ->back();

                  }

}
