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
        $list = DB::table('children')
            ->join('tripleP24', 'tripleP24.child_id', '=', 'children.id')
            ->get();
        return view('backend.triplep24.list_triplep24',compact('list'));
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
                $update = DB::table('tripleP24')->where('id', $id)->update($data);

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
