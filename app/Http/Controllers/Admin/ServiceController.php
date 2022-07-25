<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\ServiceCat;

class ServiceController extends Controller
{
    public function index(){
        $services  =  Service::with('categoryDetails')->get();
       
        $view =  view('admin.service.all-service',compact('services'));
        return $view;
    }

    public function addService(){
        $cats  =  ServiceCat::get();
        $view =  view('admin.service.add-service',compact('cats'));
        return $view;
    }
    
    //function for submit service
    public function submitService(Request $request){
        request()->validate([
            'name' => 'required', 'string',
            'service_category_id' => 'required',
        ]);
        
        
        //create new service
        $insert_cat = Service::create([
                                    'name' =>  $request->name,
                                    'description' => $request->description,
                                    'short_desc' => $request->short_desc,
                                    'price' => $request->price,
                                    'status' => $request->status,
                                    'service_category_id' => $request->service_category_id,
                                    'is_popular' => $request->is_popular,
                                ]);
        //Check inserted or not
        if($insert_cat){
           return back()->with('success','Service Added Successfully');
        } else {
            return back()->with('unsuccess','Opps Something wrong!');
        }  
    }
    
    //Show view single details
    public function details($id){
        $service  =  Service::where('id', $id)->get();
        $cats  =  ServiceCat::get();
        $view =  view('admin.service.edit-service', compact('service','cats')); 
        return $view;
    }
    
     //function for update category
    public function updateService(Request $request, $id){
        request()->validate([
            'name' => 'required', 'string',
        ]);
        
        
        //update category
        $update_cat = Service::where('id', $id)
                ->update([
                    'name' =>  $request->name,
                    'description' => $request->description,
                    'short_desc' => $request->short_desc,
                    'price' => $request->price,
                    'status' => $request->status,
                    'service_category_id' => $request->service_category_id,
                    'is_popular' => $request->is_popular,
                ]);
        //Check update or not
        if($update_cat){
           return back()->with('success','Service Updated Successfully');
        } else {
            return back()->with('unsuccess','Opps Something wrong!');
        }  
    }
    
    //function for delete service
    public function delete($id){
        $delete  =  Service::where('id', $id)->delete(); 
        if($delete){
            return back()->with('success','Service Deleted Successfully');
        } else {
            return back()->with('unsuccess','Opps Something wrong!');
        }  
    }
}
