<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Occasion;

use RealRashid\SweetAlert\Facades\Alert;
class CategoryController extends Controller
{
    public function addCategory (Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $parent_category= Category::find($data['parent_id']);
            // dd($parent_category->name);
            $category = new Category; 
            $category->name = $data['category_name'];
            $category->parent_id = $data['parent_id'];
            $category->parent_name = $parent_category->name;
            $category->url = str_slug($data['category_name']);
            $category->description = $data['category_description'];
            $category->save();
            return redirect('/admin/view-categories')->with('flash_message_success','Category Added Successfully!!');
        }
        $levels = Category::where(['parent_id'=>0])->get();
        return view('admin.category.add_category')->with(compact('levels'));
    }
    public function addParentCategory(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $category = new Category; 
            $category->name = $data['category_name'];
            $category->parent_id = 0;
            $category->url = str_slug($data['category_name']);
            $category->description = $data['category_name'];
            $category->save();
            return redirect()->back()->with('flash_message_success','Parent Category Added Successfully!!');
        }
        $levels = Category::where(['parent_id'=>0])->get();
        return view('admin.category.add_category')->with(compact('levels'));
    }
    public function viewCategories(){
        $categories = Category::get();
        $categories = Category::where('parent_id','!=',0)->get();
        return view('admin.category.view_category')->with(compact('categories'));
    }
    public function editCategory(Request $request,$id=null){
        if($request->isMethod('post')){
            $data = $request->all();
            Category::where(['id'=>$id])->update(['name'=>$data['category_name'],
            'parent_id'=>$data['parent_id'],'description'=>$data['category_description']
            ,'url'=>str_slug($data['category_name'])]);
            return redirect('/admin/view-categories')->with('flash_message_success','Category Updated Successfully!!!');
        }
        $levels = Category::where(['parent_id'=>0])->get();
        $categoryDetails = Category::where(['id'=>$id])->first();
        return view('admin.category.edit_category')->with(compact('levels','categoryDetails'));
    }
    public function editParentCategory(Request $request,$id=null){
        if($request->isMethod('post')){
            $data = $request->all();
            Category::where(['id'=>$id])->update(['name'=>$data['category_name'],
            'parent_id'=>0,'description'=>$data['category_name']
            ,'url'=>str_slug($data['category_name'])]);
            $levels = Category::where(['parent_id'=>0])->get();
            
            return redirect('/admin/add-category')->with(compact('levels'))->with('flash_message_success','Parent Category Updated Successfully!!!');
            // return redirect('/admin/view-categories')->with('flash_message_success','Category Updated Successfully!!!');
        }
        $levels = Category::where(['parent_id'=>0])->get();
        $categoryDetails = Category::where(['id'=>$id])->first();
        return view('admin.category.edit_parent_category')->with(compact('levels','categoryDetails'));
    }
    public function deleteCategory($id=null){
        Category::where(['id'=>$id])->delete();
        Alert::Success('Deleted','Success Message');
        return redirect()->back();
    }
    public function updateStatus(Request $request,$id=null){
        $data = $request->all();
        Occasion::where('id',$data['id'])->update(['status'=>$data['status']]);

    }
}
