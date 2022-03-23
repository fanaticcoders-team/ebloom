<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use RealRashid\SweetAlert\Facades\Alert;
class TypesController extends Controller
{
    public function addType (Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // dd($data);
            $type = new Type; 
            $type->name = $data['type_name'];
            $type->description = $data['type_description'];
            $type->slug = str_slug($data['type_name']);
            $type->save();
            return redirect('/admin/view-types')->with('flash_message_success','New flower type added successfully!!');
        }
        return view('admin.type.add_type');
    }
    public function viewTypes(){
        $types = Type::get();
        return view('admin.type.view_types')->with(compact('types'));
    }
    public function editType(Request $request,$slug=null){
        if($request->isMethod('post')){
            $data = $request->all();
            Type::where(['slug'=>$slug])->update(['name'=>$data['type_name'],'description'=>$data['type_description']
            ,'slug'=>str_slug($data['type_name'])]);
            return redirect('/admin/view-types')->with('flash_message_success','flower type updated successfully!!!');
        }
        
        $typeDetails = Type::where(['slug'=>$slug])->first();
        return view('admin.type.edit_type')->with(compact('typeDetails'));
    }
    public function deleteType($id=null){
        Type::where(['id'=>$id])->delete();
        Alert::Success('Deleted','Success Message');
        return redirect()->back();
    }
    public function updateStatus(Request $request,$id=null){
        $data = $request->all();
        Type::where('id',$data['id'])->update(['status'=>$data['status']]);

    }
}
