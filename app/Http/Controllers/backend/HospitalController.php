<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HospitalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
        	
    public function hospitalList(Request $request)
    {
        $list = DB::table('hospitals')->get();
        return view('backend.hospital.list_hospital',compact('list'));
    }


public function hospitalAdd()
{
$all = DB::table('hospitals')->get();
return view('backend.hospital.create_hospital',compact('all'));
}

    

    public function hospitalInsert(Request $request)
    {

$data = array();
$data['hp_code9'] = $request->hp_code9;
$data['hp_code5'] = $request->hp_code5;
$data['hp_code11'] = $request->hp_code11;
$data['hp_name'] = $request->hp_name;
$data['hp_code9'] = $request->hp_code9;
$data['hp_typecompany'] = $request->hp_typecompany;
$data['hp_type'] = $request->hp_type;
$data['hp_affiliation'] = $request->hp_affiliation;
$data['hp_department'] = $request->hp_department;
$data['hp_usagestatus'] = $request->hp_usagestatus;    
$data['hp_uservicearea'] = $request->hp_uservicearea;
$data['hp_address'] = $request->hp_address;
$data['hp_province'] = $request->hp_province;
$data['hp_district'] = $request->hp_district;
$data['hp_subdistrict'] = $request->hp_subdistrict;
$data['hp_moo'] = $request->hp_moo;
$data['hp_portcode'] = $request->hp_portcode;
$data['hp_phone'] = $request->hp_phone;
$insert = DB::table('hospitals')->insert($data);
       
if ($insert) 
{
   
                return Redirect()->route('hospital.index')->with('success','Book Category created successfully!');
                 
        }
else
        {
        $notification=array
        (
        'messege'=>'error ',
        'alert-type'=>'error'
        );
        return Redirect()->route('hospital.index')->with($notification);
        }
           
}

      public function hospitalEditCategory ($id)
    {
        $edit=DB::table('hospitals')
             ->where('id',$id)
             ->first();
        return view('backend.hospital.edit_hospital', compact('edit'));     
    }

        public function hospitalUpdateCategory(Request $request,$id)
    {
      
        DB::table('hospitals')->where('id', $id)->first();        
        $data = array();
        $data['hp_code9'] = $request->hp_code9;
$data['hp_code5'] = $request->hp_code5;
$data['hp_code11'] = $request->hp_code11;
$data['hp_name'] = $request->hp_name;
$data['hp_code9'] = $request->hp_code9;
$data['hp_typecompany'] = $request->hp_typecompany;
$data['hp_type'] = $request->hp_type;
$data['hp_affiliation'] = $request->hp_affiliation;
$data['hp_department'] = $request->hp_department;
$data['hp_usagestatus'] = $request->hp_usagestatus;    
$data['hp_uservicearea'] = $request->hp_uservicearea;
$data['hp_address'] = $request->hp_address;
$data['hp_province'] = $request->hp_province;
$data['hp_district'] = $request->hp_district;
$data['hp_subdistrict'] = $request->hp_subdistrict;
$data['hp_moo'] = $request->hp_moo;
$data['hp_portcode'] = $request->hp_portcode;
$data['hp_phone'] = $request->hp_phone;
        $update = DB::table('hospitals')->where('id', $id)->update($data);

        if ($update) 
    {
            
            return Redirect()->route('hospital.index')->with('success','Book Category Updated successfully!');                     
    }
        else
    {
        $notification=array
        (
        'messege'=>'error ',
        'alert-type'=>'error'
        );
        return Redirect()->route('hospital.index')->with($notification);
    }
     
    }

public function hospitalDeleteCategory ($id)
    {
    
        $delete = DB::table('hospitals')->where('id', $id)->delete();
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
