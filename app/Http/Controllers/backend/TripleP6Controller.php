<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class TripleP6Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
        	
    public function triplep6List(Request $request)
    {
        $list = DB::table('children')
                ->join('tripleP6', function ($join) {
                    $join->on('children.id', '=', 'tripleP6.child_id')
                    ;
                    })
                //->join('children', 'tripleP6.child_id', '=', 'children.id')
                ->get();     
                //print_r($list);
                
        return view('backend.triplep6.list_triplep6',compact('list'));
    }


public function triplep6Add($id)
{
$child_id = $id ;   
$all = DB::table('tripleP6')->get();
return view('backend.triplep6.create_triplep6',compact('all'),compact('child_id'));
}

    

    public function triplep6Insert(Request $request)
    {
$data = array();
$data['child_id'] = $request->child_id;
$data['r1'] = $request->r1; 
$data['r2'] = $request->r2;
$data['r3'] = $request->r3;  
$data['r4'] = $request->r4; 
$data['r5'] = $request->r5;
$data['r6'] = $request->r6; 
//$data['created_at'] = $request->r5;
//$data['updated_at'] = $request->r6;   

$insert = DB::table('tripleP6')->insert($data);
       
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
        return Redirect()->route('child.index')->with($notification);
        }
           
}

      public function triplep6EditCategory ($id)
    {
        $edit=DB::table('tripleP6')
             ->where('id',$id)
             ->first();

             //print_r($edit);
        return view('backend.triplep6.edit_triplep6', compact('edit'));     
    }

        public function triplep6UpdateCategory(Request $request,$id)
    {
      
        DB::table('tripleP6')->where('id', $id)->first();        
        $data = array();
        $data['r1'] = $request->r1; 
        $data['r2'] = $request->r2;
        $data['r3'] = $request->r3;  
        $data['r4'] = $request->r4; 
        $data['r5'] = $request->r5;
        $data['r6'] = $request->r6; 
        $update = DB::table('tripleP6')->where('id', $id)->update($data);

        if ($update) 
    {
            
            return Redirect()->route('triplep6.index')->with('success',' Updated successfully!');                     
    }
        else
    {
        $notification=array
        (
        'messege'=>'error ',
        'alert-type'=>'error'
        );
        return Redirect()->route('triplep6.index')->with($notification);
    }
     
    }

public function triplep6DeleteCategory ($id)
    {
    
        $delete = DB::table('bookcategories')->where('id', $id)->delete();
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
