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
<td></td>

<td>
<a href="{{ URL::to('/edit_bookcategory/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
<a href="{{ URL::to('delete_bookcategory/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete" class="middle-align">Delete</a>

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