<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ServiceCat;

class ServiceCatController extends Controller
{
    public function index(){
        $cats  =  ServiceCat::get();
        $view =  view('admin.service.all-service-cat', compact('cats'));
        return $view;
    }

    public function addService(){
        $view =  view('admin.service.add-service-cat');
        return $view;
    }

    //function for submit category
    public function submitCategory(Request $request){
        request()->validate([
            'name' => 'required', 'string',
        ]);
        
        
        //create new category
        $insert_cat = ServiceCat::create([
                                    'name' =>  $request->name,
                                    'description' => $request->description,
                                    'short_desc' => $request->short_desc,
                                    'price' => $request->price,
                                    'status' => $request->status,
                                    'is_featured' => $request->is_featured,
                                ]);
        //Check inserted or not
        if($insert_cat){
           return back()->with('success','Category Added Successfully');
        } else {
            return back()->with('unsuccess','Opps Something wrong!');
        }  
    }
    
    //Show view single cat details
    public function details($id){
        $cat  =  ServiceCat::where('id', $id)->get();
        $view =  view('admin.service.edit-service-cat', compact('cat'));
        return $view;
    }
    
     //function for update category
    public function updateCategory(Request $request, $id){
        request()->validate([
            'name' => 'required', 'string',
        ]);
        
        
        //update category
        $update_cat = ServiceCat::where('id', $id)
                ->update([
                    'name' =>  $request->name,
                    'description' => $request->description,
                    'short_desc' => $request->short_desc,
                    'price' => $request->price,
                    'status' => $request->status,
                    'is_featured' => $request->is_featured,
                ]);
        //Check update or not
        if($update_cat){
           return back()->with('success','Category Updated Successfully');
        } else {
            return back()->with('unsuccess','Opps Something wrong!');
        }  
    }
    
    //function for delete cat
    public function delete($id){
        $delete  =  ServiceCat::where('id', $id)->delete(); 
        if($delete){
            return back()->with('success','Category Deleted Successfully');
        } else {
            return back()->with('unsuccess','Opps Something wrong!');
        }  
    }
}
