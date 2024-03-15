<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class Eq15611Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
        	
    public function eq15611List(Request $request)
    {
        $list = DB::table('children')
            ->join('eq15', 'eq15.child_id', '=', 'children.id')
            ->get();
        return view('backend.eq15_611.list_eq15_611',compact('list'));
    }


public function eq15611Add($id)
{
$child_id = $id ;     
$all = DB::table('eq15')->get();
return view('backend.eq15_611.create_eq15_611',compact('all'),compact('child_id'));
}

    

    public function eq15611Insert(Request $request)
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
$insert = DB::table('eq15611')->insert($data);
       
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
        return Redirect()->route('eq15611.index')->with($notification);
        }
           
}

      public function eq15611EditCategory ($id)
    {
        $edit=DB::table('eq15611')
             ->where('id',$id)
             ->first();
        return view('backend.eq15611.edit_eq15_611', compact('edit'));     
    }

        public function eq15611UpdateCategory(Request $request,$id)
    {
      
        DB::table('eq15611')->where('id', $id)->first();        
        $data = array();
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
        //$data['r14'] = $request->r14;
        $data['r15'] = $request->r15; 
        $update = DB::table('eq15611')->where('id', $id)->update($data);

        if ($update) 
    {
            
            return Redirect()->route('eq15611.index')->with('success','Updated successfully!');                     
    }
        else
    {
        $notification=array
        (
        'messege'=>'error ',
        'alert-type'=>'error'
        );
        return Redirect()->route('eq15611.index')->with($notification);
    }
     
    }

    public static function modelOne($amount)
    {
        if($amount == 5){
            $tr = 1 ;
        }elseif($amount == 4){
            $tr = 2 ;
        }elseif($amount == 3){
            $tr = 3 ;
        }elseif($amount == 2){
            $tr = 4 ;
        }elseif($amount == 1){
            $tr = 5 ;
        }

        return $tr;
    }

    public static function modelTwo($amount)
    {
        if($amount == 5){
            $tr = 5 ;
        }elseif($amount == 4){
            $tr = 4 ;
        }elseif($amount == 3){
            $tr = 3 ;
        }elseif($amount == 2){
            $tr = 2 ;
        }elseif($amount == 1){
            $tr = 1 ;
        }

        return $tr;
    }

public function eq15611DeleteCategory ($id)
    {
    
        $delete = DB::table('eq15611')->where('id', $id)->delete();
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
