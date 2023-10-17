<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class SchoolController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
        	
    public function schoolList(Request $request)
    {
        $list = DB::table('schools')->get();
        return view('backend.school.list_school',compact('list'));
    }


public function schoolAdd()
{
$all = DB::table('schools')->get();
return view('backend.school.create_school',compact('all'));
}

    

    public function schoolInsert(Request $request)
    {
$data = array();
$data['sc_schoolnum'] = $request->sc_schoolnum;
$data['sc_schoolname'] = $request->sc_schoolname;  
$data['sc_subdistrict'] = $request->sc_subdistrict;
$data['sc_province'] = $request->sc_province;  
$data['sc_area'] = $request->sc_area;
$data['sc_moo'] = $request->sc_moo;  
$data['sc_mooname'] = $request->sc_mooname;
$data['sc_portcode'] = $request->sc_portcode;  
$data['sc_phone'] = $request->sc_phone;  
$data['sc_lat'] = $request->sc_lat;
$data['sc_long'] = $request->sc_long;    
$insert = DB::table('schools')->insert($data);
       
if ($insert) 
{
   
                return Redirect()->route('school.index')->with('success','Book Category created successfully!');
                 
        }
else
        {
        $notification=array
        (
        'messege'=>'error ',
        'alert-type'=>'error'
        );
        return Redirect()->route('school.index')->with($notification);
        }
           
}

      public function schoolEditCategory ($id)
    {
        $edit=DB::table('schools')
             ->where('id',$id)
             ->first();
        return view('backend.school.edit_school', compact('edit'));     
    }

        public function schoolUpdateCategory(Request $request,$id)
    {
      
        DB::table('schools')->where('id', $id)->first();        
        $data = array();
        $data['sc_schoolnum'] = $request->sc_schoolnum;
        $data['sc_schoolname'] = $request->sc_schoolname;  
        $data['sc_subdistrict'] = $request->sc_subdistrict;
        $data['sc_province'] = $request->sc_province;  
        $data['sc_area'] = $request->sc_area;
        $data['sc_moo'] = $request->sc_moo;  
        $data['sc_mooname'] = $request->sc_mooname;
        $data['sc_portcode'] = $request->sc_portcode;  
        $data['sc_phone'] = $request->sc_phone;  
        $data['sc_lat'] = $request->sc_lat;
        $data['sc_long'] = $request->sc_long; 
        $update = DB::table('schools')->where('id', $id)->update($data);

        if ($update) 
    {
            
            return Redirect()->route('school.index')->with('success','Book Category Updated successfully!');                     
    }
        else
    {
        $notification=array
        (
        'messege'=>'error ',
        'alert-type'=>'error'
        );
        return Redirect()->route('school.index')->with($notification);
    }
     
    }

public function schoolDeleteCategory ($id)
    {
    
        $delete = DB::table('schools')->where('id', $id)->delete();
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
