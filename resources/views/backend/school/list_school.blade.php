@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>รายชื่อโรงเรียน</h1>
          </div>
          <!--<div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">School</li>
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
                    <h3 class="card-title"><a href="{{URL::to('/add_school')}}" ><button type="button" class="btn btn-block bg-gradient-success btn-sm">ADD</button></a></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-sm">
                    <thead>
                      <!--<tr>
                        <th style="width: 10px">#</th>
                        <th>Task</th>
                        <th>Progress</th>
                        <th style="width: 40px">Label</th>
                      </tr>-->
                      <tr>
                        <th>ลำดับ</th>  
                        <th>ชื่อโรงเรียน</th>
                        <th>เบอร์โทร</th>
                        <th>ที่อยู่</th>
                        <th>จังหวัด</th>
                        <th>อำเภอ</th>
                        <th>ตำบล</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($list as $row)
                      <tr>
                      <td>{{ $row->id }}</td>
                      <td>{{ $row->sc_schoolname }}</td>
                      <td> {{ $row->sc_phone }} </td>
                      <td> </td>
                      <td>{{ $row->sc_province }}</td>
                      <td>{{ $row->sc_district }}</td>
                      <td> {{ $row->sc_subdistrict }} </td>
                      <td> 
                      <a href="{{ URL::to('/edit_school/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                      <!--<a href="#" class="btn btn-sm btn-danger" id="delete" class="middle-align">Delete</a>-->
                      </td>

                     <!-- <td>
                      <a href="{{ URL::to('/edit_bookcategory/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                      <a href="{{ URL::to('delete_bookcategory/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete" class="middle-align">Delete</a>

                      </td>-->
                      </tr>
                      @endforeach

                      </tbody>
                    <?php /* ?>  
                    <tbody>
                          <?php
                            for ($i=1; $i <= 10 ; $i++) { 
                          ?>
                                <tr>
                                    <td><?php echo $i ; ?></td>
                                    <td>โรงเรียนทดสอบ</td>
                                    <td>099999999</td>
                                    <td>1234</td>
                                    <td>นนทบุรี</td>
                                    <td>เมืองนนทบุรี</td>
                                    <td>บางเขน</td>
                                    <td></td>
                                </tr>
                          <?php

                                }
                          ?>                   

                    </tbody>
                    <?php */ ?>
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

  @endsection
