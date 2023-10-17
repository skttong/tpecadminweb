<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class Eq15Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
        	
    public function eq15List(Request $request)
    {
        $list = DB::table('eq15')
            ->join('children', 'eq15.child_id', '=', 'children.id')
            ->get();
        return view('backend.eq15.list_eq15',compact('list'));
    }


public function eq15Add($id)
{
$child_id = $id ;     
$all = DB::table('eq15')->get();
return view('backend.eq15.create_eq15',compact('all'),compact('child_id'));
}

    

    public function eq15Insert(Request $request)
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
//$data['created_at'] = $request->r5;
//$data['updated_at'] = $request->r6;   
$insert = DB::table('eq15')->insert($data);
       
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
        return Redirect()->route('eq15.index')->with($notification);
        }
           
}

      public function eq15EditCategory ($id)
    {
        $edit=DB::table('eq15')
             ->where('id',$id)
             ->first();
        return view('backend.eq15.edit_eq15', compact('edit'));     
    }

        public function eq15UpdateCategory(Request $request,$id)
    {
      
        DB::table('eq15')->where('id', $id)->first();        
        $data = array();
        $data['name'] = $request->name;
        $data['slug'] = $request->slug;
        $update = DB::table('eq15')->where('id', $id)->update($data);

        if ($update) 
    {
            
            return Redirect()->route('eq15.index')->with('success','Book Category Updated successfully!');                     
    }
        else
    {
        $notification=array
        (
        'messege'=>'error ',
        'alert-type'=>'error'
        );
        return Redirect()->route('eq15.index')->with($notification);
    }
     
    }

public function eq15DeleteCategory ($id)
    {
    
        $delete = DB::table('eq15')->where('id', $id)->delete();
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
