<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class TripleP24Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
        	
    public function triplep24List(Request $request)
    {
        $list = DB::table('tripleP24')
            ->join('children', 'tripleP24.child_id', '=', 'children.id')
            ->get();
        return view('backend.triplep24.list_triplep24',compact('list'));
    }


public function triplep24Add($id)
{
$child_id = $id ;  
$all = DB::table('tripleP24')->get();
return view('backend.triplep24.create_triplep24',compact('all'),compact('child_id'));
}

    

    public function triplep24Insert(Request $request)
    {
$data = array();
$data['child_id'] = $request->child_id;
$data['r1'] = $request->r1; 
$data['r2'] = $request->r2;
$data['r3'] = $request->r3;  
$data['r4'] = $request->r4; 
$data['r5'] = $request->r5;
$data['r6'] = $request->r6; 
$data['r7'] = $request->r7; 
$data['r8'] = $request->r8;
$data['r9'] = $request->r9;  
$data['r10'] = $request->r10; 
$data['r11'] = $request->r11;
$data['r12'] = $request->r12; 
$data['r13'] = $request->r13; 
$data['r14'] = $request->r14;
$data['r15'] = $request->r15; 
$data['r16'] = $request->r16;
$data['r17'] = $request->r17; 
$data['r18'] = $request->r18; 
$data['r19'] = $request->r19;
$data['r20'] = $request->r20; 
$data['r21'] = $request->r21; 
$data['r22'] = $request->r22; 
$data['r23'] = $request->r23; 
$data['r24'] = $request->r24; 
//$data['created_at'] = $request->r5;
//$data['updated_at'] = $request->r6;     
$insert = DB::table('tripleP24')->insert($data);
       
if ($insert) 
{
   
                return Redirect()->route('child.index')->with('success','Book Category created successfully!');
                 
        }
else
        {
        $notification=array
        (
        'messege'=>'error ',
        'alert-type'=>'error'
        );
        return Redirect()->route('triplep24.index')->with($notification);
        }
           
}

      public function triplep24EditCategory ($id)
    {
        $edit=DB::table('tripleP24')
             ->where('id',$id)
             ->first();
        return view('backend.triplep24.edit_triplep24', compact('edit'));     
    }

        public function triplep24UpdateCategory(Request $request,$id)
    {
      
        DB::table('tripleP24')->where('id', $id)->first();        
        $data = array();
        $data['name'] = $request->name;
        $data['slug'] = $request->slug;
        $update = DB::table('triplep24')->where('id', $id)->update($data);

        if ($update) 
    {
            
            return Redirect()->route('triplep24.index')->with('success','Book Category Updated successfully!');                     
    }
        else
    {
        $notification=array
        (
        'messege'=>'error ',
        'alert-type'=>'error'
        );
        return Redirect()->route('triplep24.index')->with($notification);
    }
     
    }

public function triplep24DeleteCategory ($id)
    {
    
        $delete = DB::table('tripleP24')->where('id', $id)->delete();
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
