@extends('backend.layouts.app')
@section('content')

<div class="row">
<div class="col-md-12">
<div class="card card-primary">
<div class="card-header info">
<h3 class="card-title">EQ15 List</h3>
</div>
            <!-- /.card-header -->
 <div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>ID</th>
<th>Name</th>               
<!--<th>ข้อ 1</th>  
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
<th>ข้อ 15</th>  -->
<th>รวม</th>  
<th></th>                  
</tr>
</thead>
<tbody>
@foreach($list as $row)
<tr>
<td>{{ $row->id }}</td>
<td>{{ $row->prefix }}{{ $row->names }} {{ $row->surnames }}</td>
<!--<td> {{ $row->r1 }} </td>
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
<td> {{ $row->r15 }} </td>-->
<td>
@php 

        $tr1 = App\Http\Controllers\backend\Eq15Controller::modelOne($row->r1);
        $tr2 = App\Http\Controllers\backend\Eq15Controller::modelOne($row->r2);
        $tr3 = App\Http\Controllers\backend\Eq15Controller::modelOne($row->r3);
        $tr4 = App\Http\Controllers\backend\Eq15Controller::modelOne($row->r4);
        $tr5 = App\Http\Controllers\backend\Eq15Controller::modelOne($row->r5);
        $tr6 = App\Http\Controllers\backend\Eq15Controller::modelOne($row->r6);
        $tr7 = App\Http\Controllers\backend\Eq15Controller::modelOne($row->r7);
        $tr8 = App\Http\Controllers\backend\Eq15Controller::modelOne($row->r8);
        $tr9 = App\Http\Controllers\backend\Eq15Controller::modelOne($row->r9);
        $tr10 = App\Http\Controllers\backend\Eq15Controller::modelTwo($row->r10);
        $tr11 = App\Http\Controllers\backend\Eq15Controller::modelTwo($row->r11);
        $tr12 = App\Http\Controllers\backend\Eq15Controller::modelOne($row->r12);
        $tr13 = App\Http\Controllers\backend\Eq15Controller::modelOne($row->r13);
        $tr14 = App\Http\Controllers\backend\Eq15Controller::modelOne($row->r14);
        $tr15 = App\Http\Controllers\backend\Eq15Controller::modelOne($row->r15);

   
        $total =  $tr1+$tr2+$tr3+$tr4+$tr5+$tr6+$tr7+$tr8+$tr9+$tr10+$tr11+$tr12+$tr13+$tr14+$tr15;

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
<a href="{{ URL::to('/edit_eq15/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
<a href="{{ URL::to('delete_eq15/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete" class="middle-align">Delete</a>

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