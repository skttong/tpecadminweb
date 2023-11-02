<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DspmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
        	
    public function dspmList(Request $request)
    {
        $list = DB::table('children')
            ->join('dspm', 'dspm.child_id', '=', 'children.id')
            ->get();
        return view('backend.dspm.list_dspm',compact('list'));
    }


public function dspmAdd($id)
{
    $child_id = $id ;
    $all = DB::table('dspm')->get();
    return view('backend.dspm.create_dspm',compact('all'),compact('child_id'));
}

    

    public function dspmInsert(Request $request)
    {
        $data = array();
        $data['child_id'] = $request->child_id;
        $data['DSPM_01'] = $request->DSPM_01; 
        $data['DSPM_02'] = $request->DSPM_02; 
        $data['DSPM_03'] = $request->DSPM_03; 
        $data['DSPM_04'] = $request->DSPM_04; 
        $data['DSPM_05'] = $request->DSPM_05; 
        $data['DSPM_06'] = $request->DSPM_06; 
        $data['DSPM_07'] = $request->DSPM_07; 
        $data['DSPM_08'] = $request->DSPM_08; 
        $data['DSPM_09'] = $request->DSPM_09; 
        $data['DSPM_10'] = $request->DSPM_10; 
        $data['DSPM_11'] = $request->DSPM_11; 
        $data['DSPM_12'] = $request->DSPM_12; 
        $data['DSPM_13'] = $request->DSPM_13; 
        $data['DSPM_14'] = $request->DSPM_14; 
        $data['DSPM_15'] = $request->DSPM_15; 
        $data['DSPM_16'] = $request->DSPM_16; 
        $data['DSPM_17'] = $request->DSPM_17; 
        $data['DSPM_18'] = $request->DSPM_18; 
        $data['DSPM_19'] = $request->DSPM_19; 
        $data['DSPM_20'] = $request->DSPM_20;
        $data['DSPM_21'] = $request->DSPM_21; 
        $data['DSPM_22'] = $request->DSPM_22; 
        $data['DSPM_23'] = $request->DSPM_23; 
        $data['DSPM_24'] = $request->DSPM_24; 
        $data['DSPM_25'] = $request->DSPM_25; 
        $data['DSPM_26'] = $request->DSPM_26; 
        $data['DSPM_27'] = $request->DSPM_27; 
        $data['DSPM_28'] = $request->DSPM_28; 
        $data['DSPM_29'] = $request->DSPM_29; 
        $data['DSPM_30'] = $request->DSPM_30; 
        $data['DSPM_31'] = $request->DSPM_31; 
        $data['DSPM_32'] = $request->DSPM_32; 
        $data['DSPM_33'] = $request->DSPM_33; 
        $data['DSPM_34'] = $request->DSPM_34; 
        $data['DSPM_35'] = $request->DSPM_35; 
        $data['DSPM_36'] = $request->DSPM_36; 
        $data['DSPM_37'] = $request->DSPM_37; 
        $data['DSPM_38'] = $request->DSPM_38; 
        $data['DSPM_39'] = $request->DSPM_39; 
        $data['DSPM_40'] = $request->DSPM_40;
        $data['DSPM_41'] = $request->DSPM_41; 
        $data['DSPM_42'] = $request->DSPM_42; 
        $data['DSPM_43'] = $request->DSPM_43; 
        $data['DSPM_44'] = $request->DSPM_44; 
        $data['DSPM_45'] = $request->DSPM_45; 
        $data['DSPM_46'] = $request->DSPM_46; 
        $data['DSPM_47'] = $request->DSPM_47; 
        $data['DSPM_48'] = $request->DSPM_48; 
        $data['DSPM_49'] = $request->DSPM_49; 
        $data['DSPM_50'] = $request->DSPM_50; 
        $data['DSPM_51'] = $request->DSPM_51; 
        $data['DSPM_52'] = $request->DSPM_52; 
        $data['DSPM_53'] = $request->DSPM_53; 
        $data['DSPM_54'] = $request->DSPM_54; 
        $data['DSPM_55'] = $request->DSPM_55; 
        $data['DSPM_56'] = $request->DSPM_56; 
        $data['DSPM_57'] = $request->DSPM_57; 
        $data['DSPM_58'] = $request->DSPM_58; 
        $data['DSPM_59'] = $request->DSPM_59; 
        $data['DSPM_60'] = $request->DSPM_60;
        $data['DSPM_61'] = $request->DSPM_61; 
        $data['DSPM_62'] = $request->DSPM_62; 
        $data['DSPM_63'] = $request->DSPM_63; 
        $data['DSPM_64'] = $request->DSPM_64; 
        $data['DSPM_65'] = $request->DSPM_65; 
        $data['DSPM_66'] = $request->DSPM_66; 
        $data['DSPM_67'] = $request->DSPM_67; 
        $data['DSPM_68'] = $request->DSPM_68; 
        $data['DSPM_69'] = $request->DSPM_69; 
        $data['DSPM_70'] = $request->DSPM_70; 
        $data['DSPM_71'] = $request->DSPM_71; 
        $data['DSPM_72'] = $request->DSPM_72; 
        $data['DSPM_73'] = $request->DSPM_73; 
        $data['DSPM_74'] = $request->DSPM_74; 
        $data['DSPM_75'] = $request->DSPM_75; 
        $data['DSPM_76'] = $request->DSPM_76; 
        $data['DSPM_77'] = $request->DSPM_77; 
        $data['DSPM_78'] = $request->DSPM_78; 
        $data['DSPM_79'] = $request->DSPM_79; 
        $data['DSPM_80'] = $request->DSPM_80; 
        $data['DSPM_81'] = $request->DSPM_81; 
        $data['DSPM_82'] = $request->DSPM_82; 
        $data['DSPM_83'] = $request->DSPM_83; 
        $data['DSPM_84'] = $request->DSPM_84; 
        $data['DSPM_85'] = $request->DSPM_85; 
        $data['DSPM_86'] = $request->DSPM_86; 
        $data['DSPM_87'] = $request->DSPM_87; 
        $data['DSPM_88'] = $request->DSPM_88; 
        $data['DSPM_89'] = $request->DSPM_89; 
        $data['DSPM_90'] = $request->DSPM_90; 
        $data['DSPM_91'] = $request->DSPM_91; 
        $data['DSPM_92'] = $request->DSPM_92; 
        $data['DSPM_93'] = $request->DSPM_93; 
        $data['DSPM_94'] = $request->DSPM_94; 
        $data['DSPM_95'] = $request->DSPM_95; 
        $data['DSPM_96'] = $request->DSPM_96; 
        $data['DSPM_97'] = $request->DSPM_97; 
        $data['DSPM_98'] = $request->DSPM_98; 
        $data['DSPM_99'] = $request->DSPM_99; 
        $data['DSPM_100'] = $request->DSPM_100;
        $data['DSPM_101'] = $request->DSPM_101; 
        $data['DSPM_102'] = $request->DSPM_102; 
        $data['DSPM_103'] = $request->DSPM_103; 
        $data['DSPM_104'] = $request->DSPM_104; 
        $data['DSPM_105'] = $request->DSPM_105; 
        $data['DSPM_106'] = $request->DSPM_106; 
        $data['DSPM_107'] = $request->DSPM_107; 
        $data['DSPM_108'] = $request->DSPM_108; 
        $data['DSPM_109'] = $request->DSPM_109; 
        $data['DSPM_110'] = $request->DSPM_110; 
        $data['DSPM_111'] = $request->DSPM_111; 
        $data['DSPM_112'] = $request->DSPM_112; 
        $data['DSPM_113'] = $request->DSPM_113; 
        $data['DSPM_114'] = $request->DSPM_114; 
        $data['DSPM_115'] = $request->DSPM_115; 
        $data['DSPM_116'] = $request->DSPM_116; 
//$data['created_at'] = $request->r5;
//$data['updated_at'] = $request->r6;      
$insert = DB::table('dspm')->insert($data);
       
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
        return Redirect()->route('dspm.index')->with($notification);
        }
           
}

      public function dspmEditCategory ($id)
    {
        $edit=DB::table('dspm')
             ->where('id',$id)
             ->first();
        return view('backend.dspm.edit_dspm', compact('edit'));     
    }

        public function dspmUpdateCategory(Request $request,$id)
    {
      
        DB::table('dspm')->where('id', $id)->first();        
        $data = array();
        $data['DSPM_01'] = $request->DSPM_01; 
        $data['DSPM_02'] = $request->DSPM_02; 
        $data['DSPM_03'] = $request->DSPM_03; 
        $data['DSPM_04'] = $request->DSPM_04; 
        $data['DSPM_05'] = $request->DSPM_05; 
        $data['DSPM_06'] = $request->DSPM_06; 
        $data['DSPM_07'] = $request->DSPM_07; 
        $data['DSPM_08'] = $request->DSPM_08; 
        $data['DSPM_09'] = $request->DSPM_09; 
        $data['DSPM_10'] = $request->DSPM_10; 
        $data['DSPM_11'] = $request->DSPM_11; 
        $data['DSPM_12'] = $request->DSPM_12; 
        $data['DSPM_13'] = $request->DSPM_13; 
        $data['DSPM_14'] = $request->DSPM_14; 
        $data['DSPM_15'] = $request->DSPM_15; 
        $data['DSPM_16'] = $request->DSPM_16; 
        $data['DSPM_17'] = $request->DSPM_17; 
        $data['DSPM_18'] = $request->DSPM_18; 
        $data['DSPM_19'] = $request->DSPM_19; 
        $data['DSPM_20'] = $request->DSPM_20;
        $data['DSPM_21'] = $request->DSPM_21; 
        $data['DSPM_22'] = $request->DSPM_22; 
        $data['DSPM_23'] = $request->DSPM_23; 
        $data['DSPM_24'] = $request->DSPM_24; 
        $data['DSPM_25'] = $request->DSPM_25; 
        $data['DSPM_26'] = $request->DSPM_26; 
        $data['DSPM_27'] = $request->DSPM_27; 
        $data['DSPM_28'] = $request->DSPM_28; 
        $data['DSPM_29'] = $request->DSPM_29; 
        $data['DSPM_30'] = $request->DSPM_30; 
        $data['DSPM_31'] = $request->DSPM_31; 
        $data['DSPM_32'] = $request->DSPM_32; 
        $data['DSPM_33'] = $request->DSPM_33; 
        $data['DSPM_34'] = $request->DSPM_34; 
        $data['DSPM_35'] = $request->DSPM_35; 
        $data['DSPM_36'] = $request->DSPM_36; 
        $data['DSPM_37'] = $request->DSPM_37; 
        $data['DSPM_38'] = $request->DSPM_38; 
        $data['DSPM_39'] = $request->DSPM_39; 
        $data['DSPM_40'] = $request->DSPM_40;
        $data['DSPM_41'] = $request->DSPM_41; 
        $data['DSPM_42'] = $request->DSPM_42; 
        $data['DSPM_43'] = $request->DSPM_43; 
        $data['DSPM_44'] = $request->DSPM_44; 
        $data['DSPM_45'] = $request->DSPM_45; 
        $data['DSPM_46'] = $request->DSPM_46; 
        $data['DSPM_47'] = $request->DSPM_47; 
        $data['DSPM_48'] = $request->DSPM_48; 
        $data['DSPM_49'] = $request->DSPM_49; 
        $data['DSPM_50'] = $request->DSPM_50; 
        $data['DSPM_51'] = $request->DSPM_51; 
        $data['DSPM_52'] = $request->DSPM_52; 
        $data['DSPM_53'] = $request->DSPM_53; 
        $data['DSPM_54'] = $request->DSPM_54; 
        $data['DSPM_55'] = $request->DSPM_55; 
        $data['DSPM_56'] = $request->DSPM_56; 
        $data['DSPM_57'] = $request->DSPM_57; 
        $data['DSPM_58'] = $request->DSPM_58; 
        $data['DSPM_59'] = $request->DSPM_59; 
        $data['DSPM_60'] = $request->DSPM_60;
        $data['DSPM_61'] = $request->DSPM_61; 
        $data['DSPM_62'] = $request->DSPM_62; 
        $data['DSPM_63'] = $request->DSPM_63; 
        $data['DSPM_64'] = $request->DSPM_64; 
        $data['DSPM_65'] = $request->DSPM_65; 
        $data['DSPM_66'] = $request->DSPM_66; 
        $data['DSPM_67'] = $request->DSPM_67; 
        $data['DSPM_68'] = $request->DSPM_68; 
        $data['DSPM_69'] = $request->DSPM_69; 
        $data['DSPM_70'] = $request->DSPM_70; 
        $data['DSPM_71'] = $request->DSPM_71; 
        $data['DSPM_72'] = $request->DSPM_72; 
        $data['DSPM_73'] = $request->DSPM_73; 
        $data['DSPM_74'] = $request->DSPM_74; 
        $data['DSPM_75'] = $request->DSPM_75; 
        $data['DSPM_76'] = $request->DSPM_76; 
        $data['DSPM_77'] = $request->DSPM_77; 
        $data['DSPM_78'] = $request->DSPM_78; 
        $data['DSPM_79'] = $request->DSPM_79; 
        $data['DSPM_80'] = $request->DSPM_80; 
        $data['DSPM_81'] = $request->DSPM_81; 
        $data['DSPM_82'] = $request->DSPM_82; 
        $data['DSPM_83'] = $request->DSPM_83; 
        $data['DSPM_84'] = $request->DSPM_84; 
        $data['DSPM_85'] = $request->DSPM_85; 
        $data['DSPM_86'] = $request->DSPM_86; 
        $data['DSPM_87'] = $request->DSPM_87; 
        $data['DSPM_88'] = $request->DSPM_88; 
        $data['DSPM_89'] = $request->DSPM_89; 
        $data['DSPM_90'] = $request->DSPM_90; 
        $data['DSPM_91'] = $request->DSPM_91; 
        $data['DSPM_92'] = $request->DSPM_92; 
        $data['DSPM_93'] = $request->DSPM_93; 
        $data['DSPM_94'] = $request->DSPM_94; 
        $data['DSPM_95'] = $request->DSPM_95; 
        $data['DSPM_96'] = $request->DSPM_96; 
        $data['DSPM_97'] = $request->DSPM_97; 
        $data['DSPM_98'] = $request->DSPM_98; 
        $data['DSPM_99'] = $request->DSPM_99; 
        $data['DSPM_100'] = $request->DSPM_100;
        $data['DSPM_101'] = $request->DSPM_101; 
        $data['DSPM_102'] = $request->DSPM_102; 
        $data['DSPM_103'] = $request->DSPM_103; 
        $data['DSPM_104'] = $request->DSPM_104; 
        $data['DSPM_105'] = $request->DSPM_105; 
        $data['DSPM_106'] = $request->DSPM_106; 
        $data['DSPM_107'] = $request->DSPM_107; 
        $data['DSPM_108'] = $request->DSPM_108; 
        $data['DSPM_109'] = $request->DSPM_109; 
        $data['DSPM_110'] = $request->DSPM_110; 
        $data['DSPM_111'] = $request->DSPM_111; 
        $data['DSPM_112'] = $request->DSPM_112; 
        $data['DSPM_113'] = $request->DSPM_113; 
        $data['DSPM_114'] = $request->DSPM_114; 
        $data['DSPM_115'] = $request->DSPM_115; 
        $data['DSPM_116'] = $request->DSPM_116; 
        $update = DB::table('dspm')->where('id', $id)->update($data);

        if ($update) 
    {
            
            return Redirect()->route('dspm.index')->with('success','Book Category Updated successfully!');                     
    }
        else
    {
        $notification=array
        (
        'messege'=>'error ',
        'alert-type'=>'error'
        );
        return Redirect()->route('dspm.index')->with($notification);
    }
     
    }

public function dspmDeleteCategory ($id)
    {
    
        $delete = DB::table('dspm')->where('id', $id)->delete();
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
