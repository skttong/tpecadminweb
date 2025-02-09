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
                <h3 class="card-title">Add Book Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{URL::to('/insert_eq15611')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" id="child_id" name="child_id" value="{{$child_id}}">
                @csrf
               

<div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('eq15611.index') }}"> Back</a>
        </div>
    </div>
</div>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>แบบประเมินEQ15</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">FormEQ15</li>
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
                        <th>ลำดับ</th>  
                        <th>เนื้อหา</th>
                        <th>ไม่เป็นเลย</th>
                        <th>เป็นบางครั้ง</th>
                        <th>เป็นบ่อยครั้ง</th>
                        <th>เป็นประจํา</th>
                        <th>คะแนน</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="7">1. ดี</td>
                    </tr>  
                      <tr>
                        <td>1.</td>
                        <td>รู้จักให้กําลังใจผู้อื่น</td>
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
                           
                            <label for="radioSuccess1_6">
                            </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>รู้จักรับฟังความคิดเห็นของผู้อื่น</td>
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
                           
                            <label for="radioSuccess2_6">
                            </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>ชอบแกล้งเพื่อน</td>
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
                           
                            <label for="radioSuccess3_6">
                            </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>ยอมรับเมื่อทำผิด เช่น ขอโทษหรือยกมือไหว้</td>
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
                           
                            <label for="radioSuccess4_6">
                            </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>ทักทายหรือทำความรู้จักกับเพื่อนใหม่</td>
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
                           
                            <label for="radioSuccess5_6">
                            </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="7">2. เก่ง</td>
                      </tr>
                      <tr>
                        <td>6.</td>
                        <td>มีความตั้งใจเมื่อทําสิ่งต่างๆที่สนใจ</td>
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
                           
                            <label for="radioSuccess6_6">
                            </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>7.</td>
                        <td>พยายามทํางานที่ยากให้สําเร็จได้ด้วยตนเองเช่นการบ้านการฝีมือ</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r7" value="1"  id="radioSuccess7_1">
                                <label for="radioSuccess7_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r7" value="2" id="radioSuccess7_2">
                                <label for="radioSuccess7_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r7" value="3" id="radioSuccess7_3">
                                <label for="radioSuccess7_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r7" value="4" id="radioSuccess7_4">
                                <label for="radioSuccess7_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                           
                                <label for="radioSuccess7_6">
                                </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>8.</td>
                        <td>ท้อใจหรือล้มเลิกความตั้งใจเมื่อทำงานไม่สำเร็จหรือเมื่อมีปัญหา</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r8" value="1"  id="radioSuccess8_1">
                                <label for="radioSuccess8_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r8" value="2" id="radioSuccess8_2">
                                <label for="radioSuccess8_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r8" value="3" id="radioSuccess8_3">
                                <label for="radioSuccess8_3">
                                </label>
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r8" value="4" id="radioSuccess8_4">
                                <label for="radioSuccess8_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                           
                                <label for="radioSuccess8_6">
                                </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>9.</td>
                        <td>รู้จักรอคอยเวลาที่เหมาะสมในการแก้ปัญหาเช่นเมื่อไม่ได้ในสิ่งที่ต้องการ</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r9" value="1"  id="radioSuccess9_1">
                                <label for="radioSuccess9_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r9" value="2" id="radioSuccess9_2">
                                <label for="radioSuccess9_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r9" value="3" id="radioSuccess9_3">
                                <label for="radioSuccess9_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r9" value="4" id="radioSuccess9_4">
                                <label for="radioSuccess9_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                           
                                <label for="radioSuccess9_6">
                                </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>10.</td>
                        <td>เมื่อมีปัญหาชอบคิดหาวิธีแก้ปัญหาหลายๆทาง</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r10" value="1"  id="radioSuccess10_1">
                                <label for="radioSuccess10_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r10" value="2" id="radioSuccess10_2">
                                <label for="radioSuccess10_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r10" value="3" id="radioSuccess10_3">
                                <label for="radioSuccess10_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r10" value="4" id="radioSuccess10_4">
                                <label for="radioSuccess10_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                           
                                <label for="radioSuccess10_6">
                                </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="7">3. สุข</td>
                      </tr>
                      <tr>
                        <td>11.</td>
                        <td>ภูมิใจในจุดดีของตนเอง</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r11" value="1"  id="radioSuccess11_1">
                                <label for="radioSuccess11_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r11" value="2" id="radioSuccess11_2">
                                <label for="radioSuccess11_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r11" value="3" id="radioSuccess11_3">
                                <label for="radioSuccess11_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r11" value="4" id="radioSuccess11_4">
                                <label for="radioSuccess11_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                           
                                <label for="radioSuccess11_6">
                                </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>12.</td>
                        <td>มีอารมณ์ขัน</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r12" value="1"  id="radioSuccess12_1">
                                <label for="radioSuccess12_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r12" value="2" id="radioSuccess12_2">
                                <label for="radioSuccess12_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r12" value="3" id="radioSuccess12_3">
                                <label for="radioSuccess12_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r12" value="4" id="radioSuccess12_4">
                                <label for="radioSuccess12_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                           
                                <label for="radioSuccess12_6">
                                </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>13.</td>
                        <td>ทํากิจกรรมสร้างสุขให้ตนเองได้อย่างเหมาะสม</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r13" value="1"  id="radioSuccess13_1">
                                <label for="radioSuccess13_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r13" value="2" id="radioSuccess13_2">
                                <label for="radioSuccess13_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r13" value="3" id="radioSuccess13_3">
                                <label for="radioSuccess13_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r13" value="4" id="radioSuccess13_4">
                                <label for="radioSuccess13_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                           
                                <label for="radioSuccess13_6">
                                </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>14.</td>
                        <td>วิธีผ่อนคลายความเครียดด้วยตนเองเช่นอ่านหนังสือดูหนังฟังเพลงเล่นสนุกวาดรูปพูดคุยกับเพื่อน</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r14" value="1"  id="radioSuccess14_1">
                                <label for="radioSuccess14_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r14"  value="1" id="radioSuccess14_2">
                                <label for="radioSuccess14_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r14" value="1" id="radioSuccess14_3">
                                <label for="radioSuccess14_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r14" value="1" id="radioSuccess14_4">
                                <label for="radioSuccess14_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                           
                                <label for="radioSuccess14_6">
                                </label>
                            </div>
                        </td>
                        <!--<td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td> -->
                      </tr>
                      <tr>
                        <td>15.</td>
                        <td>เป็นเด็กอารมณ์ดี</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r15" value="1"  id="radioSuccess15_1">
                                <label for="radioSuccess15_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r15" value="2" id="radioSuccess15_2">
                                <label for="radioSuccess15_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r15" value="3" id="radioSuccess15_3">
                                <label for="radioSuccess15_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r15" value="4" id="radioSuccess15_4">
                                <label for="radioSuccess15_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                           
                                <label for="radioSuccess15_6">
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