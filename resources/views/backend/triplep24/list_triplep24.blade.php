@extends('backend.layouts.app')
@section('content')

<div class="row">
<div class="col-md-12">
<div class="card card-primary">
<div class="card-header info">
<h3 class="card-title">TripleP24 List</h3>
</div>
            <!-- /.card-header -->
 <div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>ID</th>
<th>Name</th>               
<th>ข้อ 1</th>  
<th>ข้อ 2</th>  
<th>ข้อ 3</th> 
<th>ข้อ 4</th>  
<th>ข้อ 5</th>  
<th>ข้อ 6</th>  
<th>ข้อ 7</th>  
<th>ข้อ 8</th>  
<th>ข้อ 9</th>  
<th>ข้อ 10</th>
<th>ข้อ 11</th>  
<th>ข้อ 12</th>  
<th>ข้อ 13</th> 
<th>ข้อ 14</th>  
<th>ข้อ 15</th>  
<th>ข้อ 16</th>  
<th>ข้อ 17</th>  
<th>ข้อ 18</th>  
<th>ข้อ 19</th>  
<th>ข้อ 20</th> 
<th>ข้อ 21</th> 
<th>ข้อ 22</th> 
<th>ข้อ 23</th> 
<th>ข้อ 24</th> 
<th>รวม</th>   
<th>Action</th>                  
</tr>
</thead>
<tbody>
@foreach($list as $row)
<tr>
<td>{{ $row->id }}</td>
<td>{{ $row->prefix }}{{ $row->names }} {{ $row->surnames }}</td>
<td> {{ $row->r1 }} </td>
<td> {{ $row->r2 }} </td>
<td> {{ $row->r3 }} </td>
<td> {{ $row->r4 }} </td>
<td> {{ $row->r5 }} </td>
<td> {{ $row->r6 }} </td>
<td> {{ $row->r7 }} </td>
<td> {{ $row->r8 }} </td>
<td> {{ $row->r9 }} </td>
<td> {{ $row->r10 }} </td>
<td> {{ $row->r11 }} </td>
<td> {{ $row->r12 }} </td>
<td> {{ $row->r13 }} </td>
<td> {{ $row->r14 }} </td>
<td> {{ $row->r15 }} </td>
<td> {{ $row->r16 }} </td>
<td> {{ $row->r17 }} </td>
<td> {{ $row->r18 }} </td>
<td> {{ $row->r19 }} </td>
<td> {{ $row->r20 }} </td>
<td> {{ $row->r21 }} </td>
<td> {{ $row->r22 }} </td>
<td> {{ $row->r23 }} </td>
<td> {{ $row->r24 }} </td>
<td>
@php 

        $tr1 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r1);
        $tr2 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r2);
        $tr3 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r3);
        $tr4 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r4);
        $tr5 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r5);
        $tr6 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r6);
        $tr7 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r7);
        $tr8 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r8);
        $tr9 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r9);
        $tr10 = App\Http\Controllers\backend\TripleP24Controller::modelTwo($row->r10);
        $tr11 = App\Http\Controllers\backend\TripleP24Controller::modelTwo($row->r11);
        $tr12 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r12);
        $tr13 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r13);
        $tr14 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r14);
        $tr15 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r15);
        $tr16 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r16);
        $tr17 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r17);
        $tr18 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r18); 
        $tr19 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r19);
        $tr20 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r20);
        $tr21 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r21);
        $tr22 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r22);
        $tr23 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r23);
        $tr24 = App\Http\Controllers\backend\TripleP24Controller::modelOne($row->r24);

   
        $total =  $tr1+$tr2+$tr3+$tr4+$tr5+$tr6+$tr7+$tr8+$tr9+$tr10+$tr11+$tr12+$tr13+$tr14+$tr15+$tr16+$tr17+$tr18+$tr19+$tr20+$tr21+$tr22+$tr23+$tr24;

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
<a href="{{ URL::to('/edit_triplep24/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
<a href="{{ URL::to('delete_triplep24/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete" class="middle-align">Delete</a>

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