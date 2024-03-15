@extends('backend.layouts.app')
@section('content')

<div class="card-body">
    <div class="row">

      <div class="col-md-12">

      </div>
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add triplep6</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{URL::to('/insert_triplep6')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" id="child_id" name="child_id" value="{{$child_id}}">
              	@csrf
               

<div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Back</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('triplep6.index') }}"> Back</a>
        </div>
    </div>
</div>
<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>แบบประเมินTripleP6</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">FormTripleP6</li>
            </ol>
          </div>
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
                <h3 class="card-title"></h3>
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
                        <th>ข้อ</th>  
                        <th>พฤติกรรมการเลี้ยง</th>
                        <th>ปฏิบัติประจำ</th>
                        <th>ปฏิบัติบ่อยครั้ง</th>
                        <th>ปฏิบัติบางครั้ง</th>
                        <th>ปฏิบัติน้อยครั้ง</th>
                        <th>ไม่ปฏิบัติเลย</th>
                        <th>คะแนน</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>ท่านโอบกอด และหอมแก้มลูกทุกวัน</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r1" value="1"  id="radioSuccess1_1">
                                <label for="radioSuccess1_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r1" value="2" id="radioSuccess1_2">
                                <label for="radioSuccess1_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r1" value="3" id="radioSuccess1_3">
                                <label for="radioSuccess1_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r1" value="4" id="radioSuccess1_4">
                                <label for="radioSuccess1_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                            <input type="radio" name="r1" value="5" id="radioSuccess1_5">
                            <label for="radioSuccess1_5">
                            </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                           
                            <label for="radioSuccess1_6">
                            </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>ท่านรับฟัง และเข้าใจว่าลูกกำลังรู้สึกหรือต้องการอะไร</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r2" value="1"  id="radioSuccess2_1">
                                <label for="radioSuccess2_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r2" value="2" id="radioSuccess2_2">
                                <label for="radioSuccess2_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r2" value="3" id="radioSuccess2_3">
                                <label for="radioSuccess2_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r2" value="4" id="radioSuccess2_4">
                                <label for="radioSuccess2_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                            <input type="radio" name="r2" value="5" id="radioSuccess2_5">
                            <label for="radioSuccess2_5">
                            </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                           
                            <label for="radioSuccess2_6">
                            </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>ท่านดุด่าหรือตะคอกลูก***</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r3" value="1"  id="radioSuccess3_1">
                                <label for="radioSuccess3_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r3" value="2" id="radioSuccess3_2">
                                <label for="radioSuccess3_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r3" value="3" id="radioSuccess3_3">
                                <label for="radioSuccess3_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r3" value="4" id="radioSuccess3_4">
                                <label for="radioSuccess3_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                            <input type="radio" name="r3" value="5" id="radioSuccess3_5">
                            <label for="radioSuccess3_5">
                            </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                           
                            <label for="radioSuccess3_6">
                            </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>ท่านอธิบายกับลูกว่าทำไมลูกต้องถูกลงโทษ หรือถูกตัดสิทธิ์</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r4" value="1"  id="radioSuccess4_1">
                                <label for="radioSuccess4_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r4" value="2" id="radioSuccess4_2">
                                <label for="radioSuccess4_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r4" value="3" id="radioSuccess4_3">
                                <label for="radioSuccess4_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r4" value="4" id="radioSuccess4_4">
                                <label for="radioSuccess4_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                            <input type="radio" name="r4" value="5" id="radioSuccess4_5">
                            <label for="radioSuccess4_5">
                            </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                           
                            <label for="radioSuccess4_6">
                            </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>ท่านเล่านิทานหรืออ่านหนังสือที่มีประโยชน์และมีเนื้อหาไม่รุนแรงให้ลูกฟัง</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r5" value="1"  id="radioSuccess5_1">
                                <label for="radioSuccess5_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r5" value="2" id="radioSuccess5_2">
                                <label for="radioSuccess5_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r5" value="3" id="radioSuccess5_3">
                                <label for="radioSuccess5_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r5" value="4" id="radioSuccess5_4">
                                <label for="radioSuccess5_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                            <input type="radio" name="r5" value="5" id="radioSuccess5_5">
                            <label for="radioSuccess5_5">
                            </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                           
                            <label for="radioSuccess5_6">
                            </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>6.</td>
            <td>ท่านสอนให้ลูกรู้จักสีต่างๆ ตัวเลข และสิ่งรอบๆตัว</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r6" value="1"  id="radioSuccess6_1">
                                <label for="radioSuccess6_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r6" value="2" id="radioSuccess6_2">
                                <label for="radioSuccess6_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r6" value="3" id="radioSuccess6_3">
                                <label for="radioSuccess6_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r6" value="4" id="radioSuccess6_4">
                                <label for="radioSuccess6_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                            <input type="radio" name="r6" value="5" id="radioSuccess6_5">
                            <label for="radioSuccess6_5">
                            </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                           
                            <label for="radioSuccess6_6">
                            </label>
                            </div>
                        </td>
                      </tr>

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

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>


 <div class="col-md-2">

      </div>


            </div>
            <!-- /.row -->
        </div>

                        <script type="text/javascript">
    function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#image')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>


@endsection