<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Province,Amphur,District,Hospital,School};
use DB;

class ChildController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
        	
    public function childList(Request $request)
    {
        $list = DB::table('children')->get();
        return view('backend.child.list_child',compact('list'));
    }


    public function childAdd()
    {
        //$Province = DB::table('province')->get();   
        $data['provinces'] = Province::get(["PROVINCE_ID","PROVINCE_NAME"]); 
        $data['hospital'] = Hospital::get(["hp_code9","hp_name"]);  
        $data['school'] = School::get(["sc_schoolnum","sc_schoolname"]);  
        //$data['provinces'] = Amphur::get(["AMPHUR_ID","AMPHUR_NAME"]);  
        $all = DB::table('children')->get();
        return view('backend.child.create_child',$data,compact('all'));
    }

    public function fetchAmphur(Request $request)
    {
        $data['amphur'] = Amphur::where("PROVINCE_ID",$request->country_id)
                    ->get(["AMPHUR_NAME","AMPHUR_ID"]);
        return response()->json($data);
    }
    public function fetchDistrict(Request $request)
    {
        $data['district'] = District::where("AMPHUR_ID",$request->state_id)
                    ->get(["DISTRICT_NAME","DISTRICT_ID"]);
        return response()->json($data);
    }



    

    public function childInsert(Request $request)
    {
        $data = array();
        $data['prefix'] = $request->prefix;
        $data['names'] = $request->names;
        $data['surnames'] = $request->surnames; 
        $data['idcard'] = $request->idcard;
        $data['gender'] = $request->gender;
        $data['date_of_birth'] = $request->date_of_birth; 
        $data['age'] = $request->age;
        $data['address'] = $request->address;
        $data['subdistrict'] = $request->subdistrict; 
        $data['district'] = $request->district;
        $data['province'] = $request->province;
        $data['phone'] = $request->phone;
        $data['portcode'] = $request->portcode;  
        $data['father'] = $request->father; 
        $data['phone_f'] = $request->phone_f;
        $data['mother'] = $request->mother;
        $data['phone_m'] = $request->phone_m; 
        $data['schoolcode'] = $request->schoolcode;
        $data['hcode9'] = $request->hcode9; 
        $insert = DB::table('children')->insert($data);
            
        if ($insert) 
        {
        
                        return Redirect()->route('child.index')->with('success','child created successfully!');
                        
                }
        else
                {
                $notification=array
                (
                'messege'=>'error ',
                'alert-type'=>'error'
                );
                return Redirect()->route('child.index')->with($notification);
                }
                
        }

    public function childEditCategory ($id)
    {
        $edit=DB::table('children')
             ->where('id',$id)
             ->first();
        return view('backend.child.edit_child', compact('edit'));     
    }

    public function childUpdateCategory(Request $request,$id)
    {
      
        DB::table('children')->where('id', $id)->first();        
        $data = array();
        $data['prefix'] = $request->prefix;
        $data['names'] = $request->names;
        $data['surnames'] = $request->surnames;
        $data['idcard'] = $request->idcard;
        $data['gender'] = $request->gender;
        $data['date_of_birth'] = $request->date_of_birth; 
        $data['age'] = $request->age;
        $data['address'] = $request->address;
        $data['subdistrict'] = $request->subdistrict; 
        $data['district'] = $request->district;
        $data['province'] = $request->province;
        $data['phone'] = $request->phone; 
        $data['portcode'] = $request->portcode;   
        $data['father'] = $request->father; 
        $data['phone_f'] = $request->phone_f;
        $data['mother'] = $request->mother;
        $data['phone_m'] = $request->phone_m; 
        $data['schoolcode'] = $request->schoolcode;
        $data['hcode9'] = $request->hcode9;  
        $update = DB::table('children')->where('id', $id)->update($data);

        if ($update) 
    {
            
            return Redirect()->route('child.index')->with('success','child Updated successfully!');                     
    }
        else
    {
        $notification=array
        (
        'messege'=>'error ',
        'alert-type'=>'error'
        );
        return Redirect()->route('child.index')->with($notification);
    }
     
    }

public function childDeleteCategory ($id)
    {
    
        $delete = DB::table('children')->where('id', $id)->delete();
        if ($delete)
                            {
                            $notification=array(
                            'messege'=>'Successfully Book Category Deleted ',
                            'alert-type'=>'success'
                            );
                            return Redirect()->back()->with($notification);                      
                            }
             else
                  {
                  $notification=array(
                  'messege'=>'error ',
                  'alert-type'=>'error'
                  );
                  return Redirect()->back()->with($notification);

                  }

      }
}
