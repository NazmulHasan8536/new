<?php

namespace App\Http\Controllers;

use App\Category;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function addCategory(){
        return view('category.add',compact('category'));
    }


    // All Category One

    public function allCategoryOne(){
        $users = DB::table('categories')->get();
        // return view('category.all',compact('category'));
        return view('category.all',['users'=>$users]);
    }

    // index**********
    public function allCategory(request $Request){

    // validation
        $validatedData = $Request->validate([
            'name' => 'required|unique:categories|max:255|min:4',
            'slug' => 'unique:categories|max:255',
    ]);


        $data = array();
        $data['name'] = $Request->name;
        $data['slug'] = $Request->slug;
        $category = DB::table('categories')->insert($data);
        // dd($data);


        if($category){
            $notification = array(
                'message'=>'Successfully Category Inserted',
                'alert-type'=>'success'
            );
            return Redirect()->route('allCategoryOne')->with($notification);
        }else{
            $notification = array(
                'message'=>'Something Went wrong',
                'alert-type'=>'Error'
            );
            return Redirect()->back()->with($notification);
        }
    }



    // view category 
   public function viewCategory($id){
       $category = DB::table('categories')->where('id',$id)->first();
    //    dd($category);
        return view('category.viewCategory')->with('category',$category);
   }


//    Delete Category 

   public function deleteCategory($id){
       $delete = DB::table('categories')->where('id',$id)->delete();
    //    dd($delete);

    if($delete){
        $notification = array(
            'message'=>'Successfully Category Deleted',
            'alert-type'=>'success'
        );

        return redirect()->route('allCategoryOne')->with($notification);
    }
    }


    // editCategory************************** 

    public function editCategory($id)
    {
        # code...
        // dd($id);
        $category = DB::table('categories')->where('id',$id)->first();

        return view('category.editCategory')->with('category',$category);
    }

    // Update Category 

    public function updateCategory(Request $Request,$id){
        // dd($id);

       // validation
       $validatedData = $Request->validate([
        'name' => 'required|max:255|min:4',
        'slug' => 'min:4'
        ]);


    $data = array();
    $data['name'] = $Request->name;
    $data['slug'] = $Request->slug;
    $category = DB::table('categories')->where('id',$id)->update($data);
    // dd($category);


    if($category){
        $notification = array(
            'message'=>'Successfully Category Update',
            'alert-type'=>'success'
        );
        return Redirect()->route('allCategoryOne')->with($notification);
    }else{
        $notification = array(
            'message'=>'Nothing To Update',
            'alert-type'=>'Error'
        );
        return Redirect()->back()->with($notification);
    }



   
    }
}