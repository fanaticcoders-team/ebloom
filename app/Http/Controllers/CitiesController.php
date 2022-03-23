<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use RealRashid\SweetAlert\Facades\Alert;

class CitiesController extends Controller
{
    public function addCity (Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // dd($data);
            $city = new City; 
            $city->city_name = $data['city_name'];
            $city->country = $data['country'];
            $city->slug = str_slug($data['city_name']);
            $city->save();
            
            return redirect('/admin/view-cities')->with('flash_message_success','City Added Successfully!!');
        }
        return view('admin.city.add_city');
    }
    public function viewCities(){
        $cities = City::get();
        return view('admin.city.view_cities')->with(compact('cities'));
    }
    public function editCity(Request $request,$id=null){
        if($request->isMethod('post')){
            $data = $request->all();
            City::where(['id'=>$id])->update(['city_name'=>$data['city_name'],
            'country'=>$data['country']
            ,'slug'=>str_slug($data['city_name'])]);
            return redirect('/admin/view-cities')->with('flash_message_success','City Updated Successfully!!!');
        }
        $cityDetails = City::where(['id'=>$id])->first();
        return view('admin.city.edit_city')->with(compact('cityDetails'));
    }
    public function deleteCity($id=null){
        City::where(['id'=>$id])->delete();
        Alert::Success('Deleted','Success Message');
        return redirect()->back();
    }
}
