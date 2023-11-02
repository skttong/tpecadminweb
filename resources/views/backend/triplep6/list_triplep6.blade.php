@extends('backend.layouts.app')
@section('content')

       <div class="row">
<div class="col-md-12">
<div class="card card-primary">
<div class="card-header info">
<h3 class="card-title">TripleP6 List</h3>
</div>
            <!-- /.card-header -->
 <div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>ID</th>
<th>Name</th>               
<th>ข้อ 1 </th> 
<th>ข้อ 2 </th> 
<th>ข้อ 3 </th> 
<th>ข้อ 4 </th> 
<th>ข้อ 5 </th> 
<th>ข้อ 6 </th> 
<th>รวม</th>                  
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
<td> @php 

        $tr1 = App\Http\Controllers\backend\TripleP6Controller::modelOne($row->r1);
        $tr2 = App\Http\Controllers\backend\TripleP6Controller::modelOne($row->r2);
        $tr3 = App\Http\Controllers\backend\TripleP6Controller::modelTwo($row->r3);
        $tr4 = App\Http\Controllers\backend\TripleP6Controller::modelOne($row->r4);
        $tr5 = App\Http\Controllers\backend\TripleP6Controller::modelOne($row->r5);
        $tr6 = App\Http\Controllers\backend\TripleP6Controller::modelOne($row->r6);

        $total =  $tr1+$tr2+$tr3+$tr4+$tr5+$tr6;

        if($total >= 23){
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
<a href="{{ URL::to('/edit_triplep6/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
<a href="{{ URL::to('/delete_triplep6/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete" class="middle-align">Delete</a>

</td>
</tr>
@endforeach

</tbody>
<!--<tfoot>
<tr>
<th>ID</th>
<th>Name</th>
<th>Slug</th>
<th>Action</th>
</tr>
</tfoot>-->
        </table>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
        </div>

@endsection