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
                <h3 class="card-title">Add </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
          <form role="form" action="{{URL::to('/insert_triplep24')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" id="child_id" name="child_id" value="{{$child_id}}">  	
            @csrf
               

                <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('triplep24.index') }}"> Back</a>
        </div>
    </div>
</div>
 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>แบบประเมินTripleP24</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">FormTripleP24</li>
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
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="7"><h5>ด้านการสร้างความผูกพันทางอารมณ์ประคับประคองทางจิตใจ (nurture & support: PPP-NS)</h5></td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>ท่านร่วมร้องเพลงกับลูก</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r1" value="1"  id="radioSuccess1_1">
                                <label for="radioSuccess1_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r1" value="2"id="radioSuccess1_2">
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
                                <input type="radio" name="r1" value="4"id="radioSuccess1_4">
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
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>ท่านร่วมเล่นและเป็นเพื่อนเล่นกับลูก</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r2"value="1"   id="radioSuccess2_1">
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
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>ท่านโอบกอดและหอมแก้มลูกทุกวัน</td>
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
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>เมื่อลูกถาม ท่านสนใจและตอบคำถามต่างๆของลูกโดยไม่รู้สึกเบื่อหน่าย</td>
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
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>เมื่อลูกทำกิจกรรมบางอย่างยังไม่ได้ ท่านช่วยให้ลูกทำได้สำเร็จ โดยไม่ทำแทนลูก</td>
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
                      </tr>
                      <tr>
                        <td>6.</td>
                        <td>ท่านรับฟังลูกพูดคุยเรื่องราวต่างๆ ที่ลูกอยากเล่า</td>
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
                                <input type="radio" name="r6" value="3"id="radioSuccess6_3">
                                <label for="radioSuccess6_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r6" value="4"id="radioSuccess6_4">
                                <label for="radioSuccess6_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r6" value="5"id="radioSuccess6_5">
                                <label for="radioSuccess6_5">
                                </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>7.</td>
                        <td>ท่านปลอบโยนลูกได้เมื่อลูกกำลังรู้สึกกลัว เสียใจ หรือโกรธ</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r7" value="1" id="radioSuccess7_1">
                                <label for="radioSuccess7_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r7" value="2"id="radioSuccess7_2">
                                <label for="radioSuccess7_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r7" value="3"id="radioSuccess7_3">
                                <label for="radioSuccess7_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r7" value="4"id="radioSuccess7_4">
                                <label for="radioSuccess7_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r7" value="5"id="radioSuccess7_5">
                                <label for="radioSuccess7_5">
                                </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>8.</td>
                        <td>ท่านรับฟังและเข้าใจว่าลูกกำลังรู้สึกหรือต้องการอะไร</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r8" value="1" id="radioSuccess8_1">
                                <label for="radioSuccess8_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r8" value="2"id="radioSuccess8_2">
                                <label for="radioSuccess8_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r8" value="3"id="radioSuccess8_3">
                                <label for="radioSuccess8_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r8" value="4"id="radioSuccess8_4">
                                <label for="radioSuccess8_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r8" value="5"id="radioSuccess8_5">
                                <label for="radioSuccess8_5">
                                </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">คะแนนรวมด้านความผูกพันทางอารมณ์ (A)</td>
                        <td colspan="5"></td>
                    </tr>
                    <tr>
                        <td colspan="7"><h5>การสร้างวินัยเชิงบวก (positive discipline: PPP-PD)</h5></td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>ท่านชมหรือกอดเมื่อลูกทำดีหรือทำถูกต้อง</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r9" value="1" id="radioSuccess9_1">
                                <label for="radioSuccess9_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r9" value="2"id="radioSuccess9_2">
                                <label for="radioSuccess9_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r9" value="3"id="radioSuccess9_3">
                                <label for="radioSuccess9_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r9" value="4"id="radioSuccess9_4">
                                <label for="radioSuccess9_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r9" value="5"id="radioSuccess9_5">
                                <label for="radioSuccess9_5">
                                </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>10.</td>
                        <td>ท่านตีหรือทำโทษเมื่อลูกทำไม่ดีหรือทำไม่ถูกต้อง</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r10" value="1" id="radioSuccess10_1">
                                <label for="radioSuccess10_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r10" value="2"id="radioSuccess10_2">
                                <label for="radioSuccess10_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r10" value="3"id="radioSuccess10_3">
                                <label for="radioSuccess10_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r10" value="4"id="radioSuccess10_4">
                                <label for="radioSuccess10_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r10" value="5"id="radioSuccess10_5">
                                <label for="radioSuccess10_5">
                                </label>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>11.</td>
                        <td>ท่านดุด่าหรือตะคอกลูก</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r11" value="1" id="radioSuccess11_1">
                                <label for="radioSuccess11_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r10" value="2"id="radioSuccess11_2">
                                <label for="radioSuccess11_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r11" value="3"id="radioSuccess11_3">
                                <label for="radioSuccess11_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r11" value="4"id="radioSuccess11_4">
                                <label for="radioSuccess11_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r11" value="5"id="radioSuccess11_5">
                                <label for="radioSuccess11_5">
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>12.</td>
                        <td>เมื่อเห็นว่าเด็กเล่นด้วยกันและทะเลาะกันไม่รุนแรง ท่านไม่เข้าไปห้ามปรามทันที จะปล่อยไปก่อน <br> แต่ก็คอยมองเป็นระยะเพื่อประเมินสถานการณ์หรือจัดการปัญหาของเด็ก</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r12" value="1" id="radioSuccess12_1">
                                <label for="radioSuccess12_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r12" value="2"id="radioSuccess12_2">
                                <label for="radioSuccess12_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r12" value="3"id="radioSuccess12_3">
                                <label for="radioSuccess12_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r12" value="4"id="radioSuccess12_4">
                                <label for="radioSuccess12_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r12" value="5"id="radioSuccess12_5">
                                <label for="radioSuccess12_5">
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>13.</td>
                        <td>เมื่อลูกเล่นเกินเวลาที่กำหนดไว้ หรือเล่นแล้วไม่เก็บของเล่น ท่านจะบอกให้ลูกรู้ว่าทำผิดข้อตกลง </td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r13" value="1" id="radioSuccess13_1">
                                <label for="radioSuccess13_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r13" value="2"id="radioSuccess13_2">
                                <label for="radioSuccess13_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r13" value="3"id="radioSuccess13_3">
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
                                <input type="radio" name="r13" value="5" id="radioSuccess13_5">
                                <label for="radioSuccess13_5">
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>14.</td>
                        <td>ท่านอธิบายกับลูกว่าทำไมลูกต้องถูกลงโทษหรือถูกตัดสิทธิ์</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r14" value="1" id="radioSuccess14_1">
                                <label for="radioSuccess14_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r14" value="2"id="radioSuccess14_2">
                                <label for="radioSuccess14_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r14" value="3" id="radioSuccess14_3">
                                <label for="radioSuccess14_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r14" value="4"id="radioSuccess14_4">
                                <label for="radioSuccess14_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r14" value="5"id="radioSuccess14_5">
                                <label for="radioSuccess14_5">
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>15.</td>
                        <td>ท่านสอนให้ลูกรู้จักรอคอยสิ่งที่ลูกต้องการ</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r15" value="1" id="radioSuccess15_1">
                                <label for="radioSuccess15_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r15" value="2"id="radioSuccess15_2">
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
                                <input type="radio" name="r15" value="4"id="radioSuccess15_4">
                                <label for="radioSuccess15_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r15" value="5" id="radioSuccess15_5">
                                <label for="radioSuccess15_5">
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>16.</td>
                        <td>ท่านให้ลูกมีส่วนร่วมตัดสินใจหรือกำหนดกติกา ในการเล่นหรือทำกิจกรรมต่างๆ</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r16" value="1" id="radioSuccess16_1">
                                <label for="radioSuccess16_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r16" value="2"id="radioSuccess16_2">
                                <label for="radioSuccess16_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r16" value="3"id="radioSuccess16_3">
                                <label for="radioSuccess16_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r16" value="4"id="radioSuccess16_4">
                                <label for="radioSuccess16_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r16" value="5"id="radioSuccess16_5">
                                <label for="radioSuccess16_5">
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">คะแนนรวมด้านการสร้างวินัยเชิงบวก (B)</td>
                        <td colspan="5"></td>
                    </tr>
                    <tr>
                        <td colspan="7"><h5>การส่งเสริมพัฒนาการเด็ก (developmental stimulation: PPP-DS)</h5></td>
                    </tr>
                    <tr>
                        <td>17.</td>
                        <td>ท่านสอนให้ลูกรู้จักสวัสดี ขอบคุณ ขอโทษตามกาลเทศะที่เหมาะสม</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r17" value="1" id="radioSuccess17_1">
                                <label for="radioSuccess17_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r17" value="2"id="radioSuccess17_2">
                                <label for="radioSuccess17_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r17" value="3"id="radioSuccess17_3">
                                <label for="radioSuccess17_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r17" value="4"id="radioSuccess17_4">
                                <label for="radioSuccess17_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r17" value="5" id="radioSuccess17_5">
                                <label for="radioSuccess17_5">
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>18.</td>
                        <td>ท่านสอนให้ลูกรู้จักพูดและรับฟังผู้อื่น</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r18" value="1" id="radioSuccess18_1">
                                <label for="radioSuccess18_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r18" value="2"id="radioSuccess18_2">
                                <label for="radioSuccess18_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r18" value="3"id="radioSuccess18_3">
                                <label for="radioSuccess18_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r18" value="4"id="radioSuccess18_4">
                                <label for="radioSuccess18_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r18" value="5"id="radioSuccess18_5">
                                <label for="radioSuccess18_5">
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>19.</td>
                        <td>ท่านเล่านิทานหรืออ่านหนังสือที่มีประโยชน์และมีเนื้อหาไม่รุนแรงให้ลูกฟัง</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r19" value="1" id="radioSuccess19_1">
                                <label for="radioSuccess19_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r19" value="2"id="radioSuccess19_2">
                                <label for="radioSuccess19_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r19" value="3"id="radioSuccess19_3">
                                <label for="radioSuccess19_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r19" value="4"id="radioSuccess19_4">
                                <label for="radioSuccess19_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r19" value="5"id="radioSuccess19_5">
                                <label for="radioSuccess19_5">
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>20.</td>
                        <td>ท่านสอนให้ลูกรู้จักสีต่างๆ ตัวเลข และสิ่งรอบๆตัว</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r20" value="1" id="radioSuccess20_1">
                                <label for="radioSuccess20_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r20" value="2"id="radioSuccess20_2">
                                <label for="radioSuccess20_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r20" value="3"id="radioSuccess20_3">
                                <label for="radioSuccess20_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r20" value="4"id="radioSuccess20_4">
                                <label for="radioSuccess20_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r20" value="5"id="radioSuccess20_5">
                                <label for="radioSuccess20_5">
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>21.</td>
                        <td>ท่านจัดหาของเล่นที่เหมาะสมตามวัยให้ลูก โดยคำนึงถึงความปลอดภัยของลูก</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r21" value="1" id="radioSuccess21_1">
                                <label for="radioSuccess21_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r21" value="2"id="radioSuccess21_2">
                                <label for="radioSuccess21_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r21" value="3"id="radioSuccess21_3">
                                <label for="radioSuccess21_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r21" value="4"id="radioSuccess21_4">
                                <label for="radioSuccess21_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r21" value="5"id="radioSuccess21_5">
                                <label for="radioSuccess21_5">
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>22.</td>
                        <td>ท่านสอนให้ลูกหัดทำของเล่นง่ายๆ ด้วยตนเอง เช่น พับกระดาษเป็นรูปต่างๆ เป็นต้น</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r22" value="1" id="radioSuccess22_1">
                                <label for="radioSuccess22_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r22" value="2"id="radioSuccess22_2">
                                <label for="radioSuccess22_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r22" value="3" id="radioSuccess22_3">
                                <label for="radioSuccess22_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r22" value="4" id="radioSuccess22_4">
                                <label for="radioSuccess22_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r22" value="5" id="radioSuccess22_5">
                                <label for="radioSuccess22_5">
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>23.</td>
                        <td>ท่านพยายามแบ่งเวลาพาลูกทำกิจกรรมที่หลากหลาย เช่น วิ่งเล่น เล่นกีฬา เล่นขายของ เล่นบทบาทสมมุติ เป็นต้น</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r23" value="1"  id="radioSuccess23_1">
                                <label for="radioSuccess23_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r23" value="2" id="radioSuccess23_2">
                                <label for="radioSuccess23_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r23" value="3"id="radioSuccess23_3">
                                <label for="radioSuccess23_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r23" value="4" id="radioSuccess23_4">
                                <label for="radioSuccess23_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r23" value="5" id="radioSuccess23_5">
                                <label for="radioSuccess23_5">
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>24.</td>
                        <td>ท่านสอนให้ลูกฝึกสมาธิตามความเชื่อหรือศาสนาของท่าน</td>
                        <td>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r24" value="1"  id="radioSuccess24_1">
                                <label for="radioSuccess24_1">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r24" value="2" id="radioSuccess24_2">
                                <label for="radioSuccess24_2">
                                </label>
                              </div>
                        </td>
                        <td>      
                              <div class="icheck-success d-inline">
                                <input type="radio" name="r24" value="3" id="radioSuccess24_3">
                                <label for="radioSuccess24_3">
                                </label>
                              </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r24" value="4" id="radioSuccess24_4">
                                <label for="radioSuccess24_4">
                                </label>
                            </div>
                        </td>
                        <td>      
                            <div class="icheck-success d-inline">
                                <input type="radio" name="r24" value="5" id="radioSuccess24_5">
                                <label for="radioSuccess24_5">
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">คะแนนรวมด้านการส่งเสริมพัฒนาการเด็ก (C)</td>
                        <td colspan="5"></td>
                    </tr>
                    <tr>
                        <td colspan="2">คะแนนรวมทุกด้าน (A+B+C)</td>
                        <td colspan="5"></td>
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