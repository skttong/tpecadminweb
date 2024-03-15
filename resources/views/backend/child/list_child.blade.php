@extends('backend.layouts.app')
@section('content')

   <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>รายชื่อเด็ก</h1>
          </div>
          <!--<div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">TableChild</li>
            </ol>
          </div>-->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
  
        
        <div class="row">
          
          <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><a href="{{URL::to('/add_child')}}" ><button type="button" class="btn btn-block bg-gradient-success btn-sm">ADD</button></a></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <table class="table table-sm">
                    <thead>
                      <!--<tr>
                        <th style="width: 10px">#</th>
                        <th>Task</th>
                        <th>Progress</th>
                        <th style="width: 40px">Label</th>
                      </tr>-->
                      <tr>
                        <th>ลำดับ</th>  
                        <th>ชื่อ-นามสกุล</th>
                        <th>รายละเอียด</th>
                        <th>DSPM</th>
                        <th>TripleP24 </th>
                        <th>EQ 15 </th>
                        <th>EQ 6-11 </th>
                        <th>TripleP6 </th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <tbody>
                      @foreach($list as $row)
                      <tr>
                      <td>{{ $row->id }}</td>
                      <td>{{ $row->prefix }}{{ $row->names }}  {{ $row->surnames }}</td>
                      <td><a href="{{ URL::to('/edit_child/'.$row->id) }}" class="btn btn-block bg-gradient-primary btn-sm">ดู</a></td>
                      <td>
                        <a href="{{ URL::to('/add_dspm/'.$row->id) }}" class="btn btn-block bg-gradient-secondary btn-sm">PRE</a>
                        <a href="{{ URL::to('/add_dspm/'.$row->id) }}" class="btn btn-block bg-gradient-secondary btn-sm">POST</a>
                      </td>
                      <td>
                        <a href="{{ URL::to('/add_triplep24/'.$row->id) }}" class="btn btn-block bg-gradient-success btn-sm">PRE</a>
                        <a href="{{ URL::to('/add_triplep24/'.$row->id) }}" class="btn btn-block bg-gradient-success btn-sm">POST</a>
                      </td>
                      <td>
                        <a href="{{ URL::to('/add_eq15/'.$row->id) }}" class="btn btn-block bg-gradient-info btn-sm">PRE</a>
                        <a href="{{ URL::to('/add_eq15/'.$row->id) }}" class="btn btn-block bg-gradient-info btn-sm">POST</a>
                      </td>
                      <td>
                        <a href="{{ URL::to('/add_eq15611/'.$row->id) }}" class="btn btn-block bg-gradient-info btn-sm">PRE</a>
                        <a href="{{ URL::to('/add_eq15611/'.$row->id) }}" class="btn btn-block bg-gradient-info btn-sm">POST</a>
                      </td>
                      <td>
                        <a href="{{ URL::to('/add_triplep6/'.$row->id) }}" class="btn btn-block bg-gradient-warning btn-sm">PRE</a>
                        <a href="{{ URL::to('/add_triplep6/'.$row->id) }}" class="btn btn-block bg-gradient-warning btn-sm">POST</a>
                      </td>
                      <td></td>
                      

                     <!-- <td>
                      <a href="{{ URL::to('/edit_bookcategory/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                      <a href="{{ URL::to('delete_bookcategory/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete" class="middle-align">Delete</a>

                      </td>-->
                      </tr>
                      @endforeach                                       
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->


          </div>
          <!-- /.col (right) -->
        </div>
        <!-- /.row -->
        
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

            @endsection