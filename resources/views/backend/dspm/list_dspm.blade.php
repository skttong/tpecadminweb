@extends('backend.layouts.app')
@section('content')

<div class="row">
<div class="col-md-12">
<div class="card card-primary">
<div class="card-header info">
<h3 class="card-title">DSPM List</h3>
</div>
            <!-- /.card-header -->
 <div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>ID</th>
<th>Name</th>               
<th>รวม</th>  
<th>Action</th>                  
</tr>
</thead>
<tbody>
@foreach($list as $row)
<tr>
<td>{{ $row->id }}</td>
<td>{{ $row->prefix }}{{ $row->names }} {{ $row->surnames }}</td>
<td>
@php 

$DSPM_01 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_01);
$DSPM_02 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_02);
$DSPM_03 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_03);
$DSPM_04 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_04);
$DSPM_05 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_05);
$DSPM_06 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_06);
$DSPM_07 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_07);
$DSPM_08 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_08);
$DSPM_09 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_09);
$DSPM_10 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_10);
$DSPM_11 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_11);
$DSPM_12 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_12);
$DSPM_13 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_13);
$DSPM_14 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_14);
$DSPM_15 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_15);
$DSPM_16 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_16);
$DSPM_17 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_17);
$DSPM_18 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_18);
$DSPM_19 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_19);
$DSPM_20 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_20);
$DSPM_21 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_21);
$DSPM_22 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_22);
$DSPM_23 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_23);
$DSPM_24 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_24);
$DSPM_25 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_25);
$DSPM_26 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_26);
$DSPM_27 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_27);
$DSPM_28 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_28);
$DSPM_29 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_29);
$DSPM_30 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_30);
$DSPM_31 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_31);
$DSPM_32 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_32);
$DSPM_33 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_33);
$DSPM_34 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_34);
$DSPM_35 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_35);
$DSPM_36 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_36);
$DSPM_37 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_37);
$DSPM_38 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_38);
$DSPM_39 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_39);
$DSPM_40 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_40);
$DSPM_41 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_41);
$DSPM_42 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_42);
$DSPM_43 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_43);
$DSPM_44 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_44);
$DSPM_45 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_45);
$DSPM_46 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_46);
$DSPM_47 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_47);
$DSPM_48 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_48);
$DSPM_49 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_49);
$DSPM_50 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_50);
$DSPM_51 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_51);
$DSPM_52 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_52);
$DSPM_53 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_53);
$DSPM_54 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_54);
$DSPM_55 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_55);
$DSPM_56 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_56);
$DSPM_57 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_57);
$DSPM_58 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_58);
$DSPM_59 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_59);
$DSPM_60 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_60);
$DSPM_61 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_61);
$DSPM_62 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_62);
$DSPM_63 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_63);
$DSPM_64 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_64);
$DSPM_65 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_65);
$DSPM_66 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_66);
$DSPM_67 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_67);
$DSPM_68 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_68);
$DSPM_69 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_69);
$DSPM_70 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_70);
$DSPM_71 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_71);
$DSPM_72 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_72);
$DSPM_73 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_73);
$DSPM_74 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_74);
$DSPM_75 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_75);
$DSPM_76 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_76);
$DSPM_77 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_77);
$DSPM_78 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_78);
$DSPM_79 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_79);
$DSPM_80 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_80);
$DSPM_81 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_81);
$DSPM_82 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_82);
$DSPM_83 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_83);
$DSPM_84 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_84);
$DSPM_85 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_85);
$DSPM_86 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_86);
$DSPM_87 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_87);
$DSPM_88 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_88);
$DSPM_89 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_89);
$DSPM_90 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_90);
$DSPM_91 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_91);
$DSPM_92 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_92);
$DSPM_93 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_93);
$DSPM_94 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_94);
$DSPM_95 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_95);
$DSPM_96 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_96);
$DSPM_97 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_97);
$DSPM_98 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_98);
$DSPM_99 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_99);
$DSPM_100 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_100);
$DSPM_101 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_101);
$DSPM_102 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_102);
$DSPM_103 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_103);
$DSPM_104 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_104);
$DSPM_105 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_105);
$DSPM_106 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_106);
$DSPM_107 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_107);
$DSPM_108 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_108);
$DSPM_109 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_109);
$DSPM_110 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_110);
$DSPM_111 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_111);
$DSPM_112 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_112);
$DSPM_113 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_113);
$DSPM_114 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_114);
$DSPM_115 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_115);
$DSPM_116 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_116);
$DSPM_117 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_117);
$DSPM_118 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_118);
$DSPM_119 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_119);
$DSPM_120 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_120);
$DSPM_121 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_121);
$DSPM_122 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_122);
$DSPM_123 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_123);
$DSPM_124 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_124);
$DSPM_125 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_125);
$DSPM_126 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_126);
$DSPM_127 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_127);
$DSPM_128 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_128);
$DSPM_129 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_129);
$DSPM_130 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_130);
$DSPM_131 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_131);
$DSPM_132 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_132);
$DSPM_133 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_133);
$DSPM_134 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_134);
$DSPM_135 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_135);
$DSPM_136 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_136);
$DSPM_137 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_137);
$DSPM_138 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_138);
$DSPM_139 = App\Http\Controllers\backend\DspmController::modelOne($row->DSPM_139);




$total = DSPM_01+DSPM_02+DSPM_03+DSPM_04+DSPM_05+DSPM_06+DSPM_07+DSPM_08+DSPM_09+DSPM_10;
$total = $total+DSPM_11+DSPM_12+DSPM_13+DSPM_14+DSPM_15+DSPM_16+DSPM_17+DSPM_18+DSPM_19+DSPM_20;
$total = $total+DSPM_21+DSPM_22+DSPM_23+DSPM_24+DSPM_25+DSPM_26+DSPM_27+DSPM_28+DSPM_29+DSPM_30;
$total = $total+DSPM_31+DSPM_32+DSPM_33+DSPM_34+DSPM_35+DSPM_36+DSPM_37+DSPM_38+DSPM_39+DSPM_40;
$total = $total+DSPM_41+DSPM_42+DSPM_43+DSPM_44+DSPM_45+DSPM_46+DSPM_47+DSPM_48+DSPM_49+DSPM_50;
$total = $total+DSPM_51+DSPM_52+DSPM_53+DSPM_54+DSPM_55+DSPM_56+DSPM_57+DSPM_58+DSPM_59+DSPM_60;
$total = $total+DSPM_61+DSPM_62+DSPM_63+DSPM_64+DSPM_65+DSPM_66+DSPM_67+DSPM_68+DSPM_69+DSPM_70;
$total = $total+DSPM_71+DSPM_72+DSPM_73+DSPM_74+DSPM_75+DSPM_76+DSPM_77+DSPM_78+DSPM_79+DSPM_80;
$total = $total+DSPM_81+DSPM_82+DSPM_83+DSPM_84+DSPM_85+DSPM_86+DSPM_87+DSPM_88+DSPM_89+DSPM_90;
$total = $total+DSPM_91+DSPM_92+DSPM_93+DSPM_94+DSPM_95+DSPM_96+DSPM_97+DSPM_98+DSPM_99+DSPM_100;
$total = $total+DSPM_101+DSPM_102+DSPM_103+DSPM_104+DSPM_105+DSPM_106+DSPM_107+DSPM_108+DSPM_109+DSPM_110;
$total = $total+DSPM_111+DSPM_112+DSPM_113+DSPM_114+DSPM_115+DSPM_116+DSPM_117+DSPM_118+DSPM_119+DSPM_120;
$total = $total+DSPM_121+DSPM_122+DSPM_123+DSPM_124+DSPM_125+DSPM_126+DSPM_127+DSPM_128+DSPM_129+DSPM_130;
$total = $total+DSPM_131+DSPM_132+DSPM_133+DSPM_134+DSPM_135+DSPM_136+DSPM_137+DSPM_138+DSPM_139;


if($total >= 96){
@endphp 
     <p style="color: green ;">{{$total}}</p>
@php
}else{
@endphp 
     <p style="color: red ;">{{$total}}</p>
@php     
}
@endphp 

</td>

<td>
<a href="{{ URL::to('/edit_dspm/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
<a href="{{ URL::to('delete_dspm/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete" class="middle-align">Delete</a>

</td>
</tr>
@endforeach

</tbody>

        </table>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
        </div>

            @endsection