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
              <form role="form" action="{{URL::to('/insert_dspm')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" id="child_id" name="child_id" value="{{$child_id}}">  	
                @csrf
               

                <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('dspm.index') }}"> Back</a>
        </div>
    </div>
</div>
<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>แบบประเมินDSPM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">FormDSPM</li>
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
                        <tr>
                            <th>ด้านอายุ</th>  
                            <th>
                              ด้านการเคลื่อนไหว Gross Motor (GM)
                            </th>
                            <th>
                              ด้านการใช้กล้ามเนื้อมัดเล็ก และสติปัญญา
                              Fine Motor (FM)
                            </th>
                            <th>     
                              ด้านการเข้าใจภาษา Receptive Language (RL)
                            </th>
                            <th>
                              ด้านการใช้ภาษา Expressive   Language (EL)
                            </th>
                            <th>
                              ด้านการช่วยเหลือตัวเอง และสังคม
                              Personal and Social (PS)
                            </th>
                          </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">
                                แรกเกิด - 1 เดือน
                            </td>
                            <td align="center">
                                1. ท่านอนควายกศีรษะและหันไปข้างใดข้างหนึ่งได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_01_1" name="DSPM_01" value="0">
                                    <label for="DSPM_01_1" >ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_01_2" name="DSPM_01" value="1">
                                    <label for="DSPM_01_2" >ไม่ผ่าน</label>
                                </div>
                            </td>
                            <td align="center">
                                2. มองตามถึงกึ่งกลางลำตัว
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_02_1" name="DSPM_02" value="0">
                                    <label for="DSPM_02_1">ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_02_2" name="DSPM_02" value="1">
                                    <label for="DSPM_02_2">ไม่ผ่าน</label>
                                </div>  
                                
                            </td>
                            <td align="center">
                                
                                3. สะดุ้งหรือเคลื่อนไหวร่างกายเมื่อได้ยินเสียงพูดระดับปกติ
                                <br>
                                <div class="icheck-success d-inline">                                
                                    <input type="radio" id="DSPM_03_1" name="DSPM_03" value="0">
                                    <label for="DSPM_03_1">ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">   
                                     <input type="radio" id="DSPM_03_2" name="DSPM_03" value="1">
                                     <label for="DSPM_03_2">ไม่ผ่าน</label>
                                </div>
                            
                            </td>
                            <td align="center">
                                
                                4. ส่งเสียงอ้อแอ้
                                <br>
                                <div class="icheck-success d-inline">                                
                                    <input type="radio" id="DSPM_04_1" name="DSPM_04" value="0">
                                    <label for="DSPM_04_1">ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_04_2" name="DSPM_04" value="1">
                                    <label for="DSPM_04_2" >ไม่ผ่าน</label>
                                </div>
                            
                            </td>
                            <td align="center">
                                
                                5. มองจ้องหน้าได้นาน 1-2 วินาที
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_05_1" name="DSPM_05" value="0">
                                    <label for="DSPM_05_1">ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_05_2" name="DSPM_05" value="1">
                                    <label for="DSPM_05_2">ไม่ผ่าน</label>
                                </div>
                            
                            </td>
                        
                        </tr>
                        <tr>
                            <td align="center">
                                1-2 เดือน
                            </td>
                            <td align="center">
                                6. ท่านอนคว่ำยกศีรษะตั้งขึ้นได้ 45 องศา นาน 3 วินาที
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_06_1" name="DSPM_06" value="0">
                                    <label for="DSPM_06_1">ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_06_2" name="DSPM_06" value="1">
                                    <label for="DSPM_06_2" >ไม่ผ่าน</label>
                                </div>
                            </td>
                            <td align="center">
                                7. มองตามผ่านกึ่งกลางลำตัว
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_07_1" name="DSPM_07" value="0">
                                    <label for="DSPM_07_1">ผ่าน</label>
                                </div>
                                
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_07_2" name="DSPM_07" value="1">
                                    <label for="DSPM_07_2">ไม่ผ่าน</label>
                                </div>
                                
                            </td>
                            <td align="center">
                                8. มองหน้าผู้พูดคุยได้นาน 5 วินาที
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_08_1" name="DSPM_08" value="0">
                                    <label for="DSPM_08_1" >ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_08_2" name="DSPM_08" value="1">
                                    <label for="DSPM_08_2">ไม่ผ่าน</label>
                                </div>
                            </td>
                            <td align="center">
                                9. ทำเสียงในลำคอ (เสียง “อู”  หรือ “อา”  หรือ “อือ”)อย่างชัดเจน
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_09_1" name="DSPM_09" value="0">
                                    <label for="DSPM_09_1">ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_09_2" name="DSPM_09" value="1">
                                    <label for="DSPM_09_2">ไม่ผ่าน</label>
                                </div>
                            </td>
                            <td align="center">
                                10. ยิ้มตอบหรือส่งเสียงตอบได้เมื่อผู้ประเมินยิ้มและพูดคุยด้วย
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_10_1" name="DSPM_10" value="0">
                                    <label for="DSPM_10_1">ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_10_2" name="DSPM_10" value="1">
                                    <label for="DSPM_10_2">ไม่ผ่าน</label>
                                </div>
                            </td>
                        
                        </tr>
                        <tr>
                            <td align="center">
                                3-4 เดือน
                            </td>
                            <td align="center">
                                11. ท่านอนคว่ำยกศีรษะและอกพ้นพื้น
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_11_1" name="DSPM_11" value="0">
                                    <label for="DSPM_11_1">ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_11_2" name="DSPM_11" value="1">
                                    <label for="DSPM_11_2">ไม่ผ่าน</label>
                                </div>
                            </td>
                            <td align="center">
                                12. มองตามสิ่งของที่เคลื่อนที่ได้เป็นมุม 180 องศา
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_12_1" name="DSPM_12" value="0">
                                    <label for="DSPM_12_1">ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_12_2" name="DSPM_12" value="1">
                                    <label for="DSPM_12_2">ไม่ผ่าน</label>
                                </div>
                            </td>
                            <td align="center">
                                13. หันตามเสียงได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_13_1" name="DSPM_13" value="0">
                                    <label for="DSPM_13_1">ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_13_2" name="DSPM_13" value="1">
                                    <label for="DSPM_13_2">ไม่ผ่าน</label>
                                </div>
                            </td>
                            <td align="center">
                                14. ทำเสียงสูงๆ ต่ำๆ เพื่อแสดงความรู้สึก
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_14_1" name="DSPM_14" value="0">
                                    <label for="DSPM_14_1">ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_14_2" name="DSPM_14" value="1">
                                    <label for="DSPM_14_2">ไม่ผ่าน</label>
                                </div>
                            </td>
                            <td align="center">
                                15. ยิ้มทักคนที่คุ้นเคย
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_15_1" name="DSPM_15" value="0">
                                    <label for="DSPM_15_1">ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_15_2" name="DSPM_15" value="1">
                                    <label for="DSPM_15_2">ไม่ผ่าน</label>
                                </div>
                            </td>
                        
                        </tr>
                        <tr>
                            <td align="center">
                                5-6 เดือน
                            </td>
                            <td align="center">
                                16. ยันตัวขึ้นจากท่านอนคว่ำโดยเหยียดแขนตรงทั้งสองข้างได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_16_1" name="DSPM_16" value="0">
                                    <label for="DSPM_16_1">ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_16_2" name="DSPM_16" value="1">
                                    <label for="DSPM_16_2">ไม่ผ่าน</label>
                                </div>
                            </td>
                            <td align="center">
                                17. เอื้อมมือหยิบและถือวัตถุไว้ขณะอยู่ในท่านอนหงาย
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_17_1" name="DSPM_17" value="0">
                                    <label for="DSPM_17_1">ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_17_2" name="DSPM_17" value="1">
                                    <label for="DSPM_17_2">ไม่ผ่าน</label>
                                </div>
                            </td>
                            <td align="center">
                                18. หันตามเสียงเรียก
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_18_1" name="DSPM_18" value="0">
                                    <label for="DSPM_18_1">ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_18_2" name="DSPM_18" value="1">
                                    <label for="DSPM_18_2">ไม่ผ่าน</label>
                                </div>
                            </td>
                            <td align="center">
                                19. เลียนแบบการเล่นทำเสียงได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_19_1" name="DSPM_19" value="0">
                                    <label for="DSPM_19_1">ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_19_2" name="DSPM_19" value="1">
                                    <label for="DSPM_19_2">ไม่ผ่าน</label>
                                </div>
                            </td>
                            <td align="center">
                                20. สนใจฟังคนพูด และสามารถมองไปทของเล่นทีผู้ทดสอบเล่นกับเด็ก
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_20_1" name="DSPM_20" value="0">
                                    <label for="DSPM_20_1">ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_20_2" name="DSPM_20" value="1">
                                    <label for="DSPM_20_2">ไม่ผ่าน</label>
                                </div>    
                            </td>
                        
                        </tr>
                        <tr>
                            <td align="center">
                                7-8 เดือน
                            </td>
                            <td align="center">
                                21. นั่งได้มั่นคงและเอี้ยวตัวใช้มือเล่นได้อย่างอิสระ (sit stable)
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_21_1" name="DSPM_21" value="0">
                                    <label for="DSPM_21_1">ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_21_2" name="DSPM_21" value="1">
                                    <label for="DSPM_21_2">ไม่ผ่าน</label>
                                </div>
                                <br>
                                22. ยืนเกาะเครื่องเรือนสูงระดับอกได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_22_1" name="DSPM_22" value="0">
                                    <label for="DSPM_22_1">ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_22_2" name="DSPM_22" value="1">
                                    <label for="DSPM_22_2">ไม่ผ่าน</label>
                                </div>
                            </td>
                            <td align="center">
                                23. จ้องมองไปที่หนังสือพร้อมกับผู้ใหญ่นาน 2-3 วินาที
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_23_1" name="DSPM_23" value="0">
                                    <label for="DSPM_23_1">ผ่าน</label>
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_23_2" name="DSPM_23" value="1">
                                    <label for="DSPM_23_2">ไม่ผ่าน</label>
                                </div>
                            </td>
                            <td align="center">
                                24. เด็กหันตามเสียงเรียกชื่อ
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_24_1" name="DSPM_24" value="0">
                                    <label for="DSPM_24_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_24_2" name="DSPM_24" value="1">
                                    <label for="DSPM_24_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                25. เลียนเสียงพูดคุย
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_25_1" name="DSPM_25" value="0">
                                    <label for="DSPM_25_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_25_2" name="DSPM_25" value="1">
                                    <label for="DSPM_25_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                26. เด็กเล่นจ๊ะเอ๊ได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_26_1" name="DSPM_26" value="0">
                                    <label for="DSPM_26_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_26_2" name="DSPM_26" value="1">
                                    <label for="DSPM_26_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                        
                        </tr>
                        <tr>
                            <td align="center">
                                10-12 เดือน(10เดือน - 1ปี)
                            </td>
                            <td align="center">
                                35. ยืนนาน 2 วินาที
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_35_1" name="DSPM_35" value="0">
                                    <label for="DSPM_35_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_35_2" name="DSPM_35" value="1">
                                    <label for="DSPM_35_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                36. จีบนิ้วมือเพื่อหยิบของชิ้นเล็ก
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_36_1" name="DSPM_36" value="0">
                                    <label for="DSPM_36_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_36_2" name="DSPM_36" value="1">
                                    <label for="DSPM_36_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                37. โบกมือหรือตบมือ
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_37_1" name="DSPM_37" value="0">
                                    <label for="DSPM_37_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_37_2" name="DSPM_37" value="1">
                                    <label for="DSPM_37_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                38. แสดงความต้องการโดยทำท่าทาง หรือเปล่งเสียง
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_38_1" name="DSPM_38" value="0">
                                    <label for="DSPM_38_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_38_2" name="DSPM_38" value="1">
                                    <label for="DSPM_38_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                39. เล่นสิ่งของตามประโยชน์ของสิ่งของได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_39_1" name="DSPM_39" value="0">
                                    <label for="DSPM_39_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_39_2" name="DSPM_39" value="1">
                                    <label for="DSPM_39_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                        
                        </tr>
                        <tr>
                            <td align="center">
                                13-15 เดือน (1ปี 1เดือน - 1ปี 3เดือน)
                            </td>
                            <td align="center">
                                40. ยืนอยู่ตามลำพังได้นานอย่างน้อย 10 วินาที
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_40_1" name="DSPM_40" value="0">
                                    <label for="DSPM_40_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_40_2" name="DSPM_40" value="1">
                                    <label for="DSPM_40_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                41. ขีดเขียน (เป็นเส้น) บนกระดาษได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_41_1" name="DSPM_41" value="0">
                                    <label for="DSPM_41_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_41_2" name="DSPM_41" value="1">
                                    <label for="DSPM_41_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                42. เลือกวัตถุตามคำสั่งได้ถูกต้อง 2 ชนิด
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_42_1" name="DSPM_42" value="0">
                                    <label for="DSPM_42_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_42_2" name="DSPM_42" value="1">
                                    <label for="DSPM_42_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                43. พูดคำพยางค์เดียว(คำโดด)ได้ 2 คำ
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_43_1" name="DSPM_43" value="0">
                                    <label for="DSPM_43_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_43_2" name="DSPM_43" value="1">
                                    <label for="DSPM_43_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                44. เลียนแบบท่าทางการทำงานบ้าน
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_44_1" name="DSPM_44" value="0">
                                    <label for="DSPM_44_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_44_2" name="DSPM_44" value="1">
                                    <label for="DSPM_44_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            
                        
                        </tr>
                        <tr>
                            <td align="center">
                                16-17 เดือน (1ปี 4เดือน - 1ปี 5เดือน)
                            </td>
                            <td align="center">
                                45. เดินลากของเล่นหรือสิ่งของได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_45_1" name="DSPM_45" value="0">
                                    <label for="DSPM_45_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_45_2" name="DSPM_45" value="1">
                                    <label for="DSPM_45_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                46. ขีดเขียนได้เอง
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_46_1" name="DSPM_46" value="0">
                                    <label for="DSPM_46_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_46_2" name="DSPM_46" value="1">
                                    <label for="DSPM_46_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                47. ทำตามคำสั่งง่ายๆ โดยไม่มีท่าทางประกอบ
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_47_1" name="DSPM_47" value="0">
                                    <label for="DSPM_47_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_47_2" name="DSPM_47" value="1">
                                    <label for="DSPM_47_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                48. ตอบชื่อวัตถุได้ถูกต้อง
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_48_1" name="DSPM_48" value="0">
                                    <label for="DSPM_48_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_48_2" name="DSPM_48" value="1">
                                    <label for="DSPM_48_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                49. เล่นการใช้สิ่งของตามหน้าที่ได้มากขึ้น ด้วยความสัมพันธ์ของ 2 สิ่งขึ้นไป
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_49_1" name="DSPM_49" value="0">
                                    <label for="DSPM_49_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_49_2" name="DSPM_49" value="1">
                                    <label for="DSPM_49_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td align="center">
                                19-24 เดือน(1ปี 7เดือน - 2ปี)
                            </td>
                            <td align="center">
                                60. เหวี่ยงขาเตะลูกบอลได้ 
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_60_1" name="DSPM_60" value="0">
                                    <label for="DSPM_60_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_60_2" name="DSPM_60" value="1">
                                    <label for="DSPM_60_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                61. ต่อก้อนไม้ 4 ชั้น
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_61_1" name="DSPM_61" value="0">
                                    <label for="DSPM_61_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_61_2" name="DSPM_61" value="1">
                                    <label for="DSPM_61_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                62. เลือกวัตถุตามคำสั่ง(ตัวเลือก  4 ชนิด)
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_62_1" name="DSPM_62" value="0">
                                    <label for="DSPM_62_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_62_2" name="DSPM_62" value="1">
                                    <label for="DSPM_62_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                63. เลียนคำพูดที่เป็นวลีประกอบด้วยคำ 2 คำขึ้นไป
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_63_1" name="DSPM_63" value="0">
                                    <label for="DSPM_63_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_63_2" name="DSPM_63" value="1">
                                    <label for="DSPM_63_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                64. ใช้ช้อนตักอาหารกินเองได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_64_1" name="DSPM_64" value="0">
                                    <label for="DSPM_64_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_64_2" name="DSPM_64" value="1">
                                    <label for="DSPM_64_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td align="center">
                                25-29 เดือน(2ปี 1เดือน - 2ปี 5เดือน)
                            </td>
                            <td align="center">
                                65. กระโดดเท้าพ้นพื้นทั้ง 2 ข้าง
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_65_1" name="DSPM_65" value="0">
                                    <label for="DSPM_65_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_65_2" name="DSPM_65" value="1">
                                    <label for="DSPM_65_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                66. แก้ปัญหาง่ายๆ โดยใช้เครื่องมือด้วยตัวเอง
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_66_1" name="DSPM_66" value="0">
                                    <label for="DSPM_66_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_66_2" name="DSPM_66" value="1">
                                    <label for="DSPM_66_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                67. ชี้อวัยวะ 7 ส่วน
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_67_1" name="DSPM_67" value="0">
                                    <label for="DSPM_67_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_67_2" name="DSPM_67" value="1">
                                    <label for="DSPM_67_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                68. พูดตอบรับและปฏิเสธได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_68_1" name="DSPM_68" value="0">
                                    <label for="DSPM_68_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_68_2" name="DSPM_68" value="1">
                                    <label for="DSPM_68_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                69. ล้างและเช็ดมือได้เอง
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_69_1" name="DSPM_69" value="0">
                                    <label for="DSPM_69_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_69_2" name="DSPM_69" value="1">
                                    <label for="DSPM_69_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td align="center">
                                31-36 เดือ น(2ปี 7เดือน - 3ปี)
                            </td>
                            <td align="center">
                                79. ยืนขาเดียว 1 วินาที
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_79_1" name="DSPM_79" value="0">
                                    <label for="DSPM_79_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_79_2" name="DSPM_79" value="1">
                                    <label for="DSPM_79_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                80. เลียนแบบลากเส้นเป็นวงต่อเนื่องกัน
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_80_1" name="DSPM_80" value="0">
                                    <label for="DSPM_80_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_80_2" name="DSPM_80" value="1">
                                    <label for="DSPM_80_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                81. นำวัตถุ 2 ชนิด ในห้องมาให้ได้ตามคำสั่ง
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_81_1" name="DSPM_81" value="0">
                                    <label for="DSPM_81_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_81_2" name="DSPM_81" value="1">
                                    <label for="DSPM_81_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                82. พูดติดต่อกัน 3-4 คำได้อย่างน้อย 4 ความหมาย
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_82_1" name="DSPM_82" value="0">
                                    <label for="DSPM_82_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_82_2" name="DSPM_82" value="1">
                                    <label for="DSPM_82_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                83. ใส่กางเกงได้เอง
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_83_1" name="DSPM_83" value="0">
                                    <label for="DSPM_83_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_83_2" name="DSPM_83" value="1">
                                    <label for="DSPM_83_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td align="center">
                                37-41 เดือน (3ปี 1เดือน - 3ปี 5เดือน)
                            </td>
                            <td align="center">
                                84. ยืนขาเดียว 3 วินาที
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_84_1" name="DSPM_84" value="0">
                                    <label for="DSPM_84_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_84_2" name="DSPM_84" value="1">
                                    <label for="DSPM_84_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                85. เลียนแบบวาดรูปวงกลม
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_85_1" name="DSPM_85" value="0">
                                    <label for="DSPM_85_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_85_2" name="DSPM_85" value="1">
                                    <label for="DSPM_85_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                86. ทำตามคำสั่งต่อเนื่องได้ 2 กริยากับ วัตถุ 2 ชนิด
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_86_1" name="DSPM_86" value="0">
                                    <label for="DSPM_86_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_86_2" name="DSPM_86" value="1">
                                    <label for="DSPM_86_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                87. ถามคำถามได้ 4 แบบ เช่น ใคร อะไร ที่ไหน ทำไม
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_87_1" name="DSPM_87" value="0">
                                    <label for="DSPM_87_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_87_2" name="DSPM_87" value="1">
                                    <label for="DSPM_87_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                88. ทำตามกฎในการเล่นเป็นกลุ่มได้โดยมีผู้ใหญ่แนะนำ
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_88_1" name="DSPM_88" value="0">
                                    <label for="DSPM_88_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_88_2" name="DSPM_88" value="1">
                                    <label for="DSPM_88_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                89. ช่วยทำงานขั้นตอนเดียวได้เอง
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_89_1" name="DSPM_89" value="0">
                                    <label for="DSPM_89_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_89_2" name="DSPM_89" value="1">
                                    <label for="DSPM_89_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td align="center">
                                43-48 เดือน (3ปี 7เดือน - 4ปี )
                            </td>
                            <td align="center">
                                101. กระโดดขาเดียวได้อย่างน้อย 2 ครั้ง
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_101_1" name="DSPM_101" value="0">
                                    <label for="DSPM_101_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_101_2" name="DSPM_101" value="1">
                                    <label for="DSPM_101_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                102. ตัดกระดาษรูปสี่เหลี่ยมจัตุรัสขนาด 10 ซม. ออกเป็น 2 ชิ้น(โดยใช้กรรไกรปลายมน)
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_102_1" name="DSPM_102" value="0">
                                    <label for="DSPM_102_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_102_2" name="DSPM_102" value="1">
                                    <label for="DSPM_102_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                103. เลียนแบบวาดรูป + (กากบาท)
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_103_1" name="DSPM_103" value="0">
                                    <label for="DSPM_103_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_103_2" name="DSPM_103" value="1">
                                    <label for="DSPM_103_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                104. เลือกวัตถุที่มีขนาดใหญ่กว่าและเล็กกว่า
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_104_1" name="DSPM_104" value="0">
                                    <label for="DSPM_104_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_104_2" name="DSPM_104" value="1">
                                    <label for="DSPM_104_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                105. พูดเป็นประโยค 3 คำ ติดต่อกัน โดยมีความหมายและเหมาะสมกับโอกาสได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_105_1" name="DSPM_105" value="0">
                                    <label for="DSPM_105_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_105_2" name="DSPM_105" value="1">
                                    <label for="DSPM_105_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                106. ใส่กระดุมขนาดใหญ่อย่างน้อย 2 ซม. ได้เอง 3 เม็ด
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_106_1" name="DSPM_106" value="0">
                                    <label for="DSPM_106_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_106_2" name="DSPM_106" value="1">
                                    <label for="DSPM_106_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td align="center">
                                49-54 เดือน(4ปี 1เดือน - 4ปี 6เดือน)
                            </td>
                            <td align="center">
                                107. กระโดดสองเท้าพร้อมกันไปด้านข้างและถอยหลังได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_107_1" name="DSPM_107" value="0">
                                    <label for="DSPM_107_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_107_2" name="DSPM_107" value="1">
                                    <label for="DSPM_107_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                108. ประกอบชิ้นส่วนของรูปภาพที่ตัดออกเป็นส่วนๆ 8 ชิ้นได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_108_1" name="DSPM_108" value="0">
                                    <label for="DSPM_108_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_108_2" name="DSPM_108" value="1">
                                    <label for="DSPM_108_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                109. เลือกรูปภาพที่แสดงเวลากลางวัน กลางคืน
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_109_1" name="DSPM_109" value="0">
                                    <label for="DSPM_109_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_109_2" name="DSPM_109" value="1">
                                    <label for="DSPM_109_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                110. ตอบคำถามได้ถูกต้องเมื่อถามว่า “ถ้ารู้สึกร้อนไม่สบาย หิว” จะทำอย่างไร
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_110_1" name="DSPM_110" value="0">
                                    <label for="DSPM_110_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_110_2" name="DSPM_110" value="1">
                                    <label for="DSPM_110_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                111. ทำความสะอาดตนเองหลังจากอุจจาระได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_111_1" name="DSPM_111" value="0">
                                    <label for="DSPM_111_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_111_2" name="DSPM_111" value="1">
                                    <label for="DSPM_111_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td align="center">
                                55-60 เดือน(4ปี 7เดือน - 5ปี)
                            </td>
                            <td align="center">
                                112. เดินต่อส้นเท้า
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_112_1" name="DSPM_112" value="0">
                                    <label for="DSPM_112_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_112_2" name="DSPM_112" value="1">
                                    <label for="DSPM_112_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                113. จับดินสอได้ถูกต้อง
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_113_1" name="DSPM_113" value="0">
                                    <label for="DSPM_113_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_113_2" name="DSPM_113" value="1">
                                    <label for="DSPM_113_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                114. เลือกสีได้ 8 สีตามคำสั่ง
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_114_1" name="DSPM_114" value="0">
                                    <label for="DSPM_114_1">ผ่าน</label>
 
                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_114_2" name="DSPM_114" value="1">
                                    <label for="DSPM_114_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                115. ผลัดกันพูดคุยกับเพื่อนในกลุ่ม
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_115_1" name="DSPM_115" value="0">
                                    <label for="DSPM_115_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_115_2" name="DSPM_115" value="1">
                                    <label for="DSPM_115_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            <td align="center">
                                116. เล่นเลียนแบบบทบาทของผู้ใหญ่ได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_116_1" name="DSPM_116" value="0">
                                    <label for="DSPM_116_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_116_2" name="DSPM_116" value="1">
                                    <label for="DSPM_116_2">ไม่ผ่าน</label>

                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td align="center">
                                9 เดือน
                            </td>
                            <td align="center">
                                27. ลุกขึ้นนั่งได้จากท่านอน
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_27_1" name="DSPM_27" value="0">
                                    <label for="DSPM_27_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_27_2" name="DSPM_27" value="1">
                                    <label for="DSPM_27_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                                <br>
                                28.  ยืนอยู่ได้โดยใช้มือเกาะเครื่องเรือนสูงระดับอก
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_28_1" name="DSPM_28" value="0">
                                    <label for="DSPM_28_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_28_2" name="DSPM_28" value="1">
                                    <label for="DSPM_28_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                            </td>
                            <td align="center">
                                29. หยิบก้อนไม้จากพื้นและถือไว้มือละชิ้น
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_29_1" name="DSPM_29" value="0">
                                    <label for="DSPM_29_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_29_2" name="DSPM_29" value="1">
                                    <label for="DSPM_29_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                                <br>
                                30. ใช้นิ้วหัวแม่มือและนิ้วอื่นๆหยิบของขึ้นจากพื้น
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_30_1" name="DSPM_30" value="0">
                                    <label for="DSPM_30_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_30_2" name="DSPM_30" value="1">
                                    <label for="DSPM_30_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                            </td>
                            <td align="center">
                                31. ทำตามคำสั่งง่ายๆ เมื่อใช้ท่าทางประกอบ
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_31_1" name="DSPM_31" value="0">
                                    <label for="DSPM_31_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_31_2" name="DSPM_31" value="1">
                                    <label for="DSPM_31_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                                <br>
                            </td>
                            <td align="center">
                                32. เด็กรู้จักการปฏิเสธด้วยการแสดงท่าทาง
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_32_1" name="DSPM_32" value="0">
                                    <label for="DSPM_32_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_32_2" name="DSPM_32" value="1">
                                    <label for="DSPM_32_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                                <br>
                                33. เลียนเสียงคำพูดที่คุ้นเคยได้อย่างน้อย 1 เสียง เช่น หม่ำจ๊ะ
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_33_1" name="DSPM_33" value="0">
                                    <label for="DSPM_33_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_33_2" name="DSPM_33" value="1">
                                    <label for="DSPM_33_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                            </td>
                            <td align="center">
                                34. ใช้นิ้วหยิบอาหารกินได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_34_1" name="DSPM_34" value="0">
                                    <label for="DSPM_34_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_34_2" name="DSPM_34" value="1">
                                    <label for="DSPM_34_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                                <br>
                            </td>
                            
                        </tr>
                        <tr>
                            <td align="center">
                                18 เดือน(1ปี 6เดือน)
                            </td>
                            <td align="center">
                                50. วิ่งได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_50_1" name="DSPM_50" value="0">
                                    <label for="DSPM_50_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_50_2" name="DSPM_50" value="1">
                                    <label for="DSPM_50_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                                <br>
                                51. เดินถือลูกบอล ไปได้ไกล 3 เมตร
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_51_1" name="DSPM_51" value="0">
                                    <label for="DSPM_51_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_51_2" name="DSPM_51" value="1">
                                    <label for="DSPM_51_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                            </td>
                            <td align="center">
                                52. เปิดหน้าหนังสือที่ทำด้วยกระดาษแข็งทีละแผ่นได้เอง
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_52_1" name="DSPM_52" value="0">
                                    <label for="DSPM_52_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_52_2" name="DSPM_52" value="1">
                                    <label for="DSPM_52_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                                <br>
                                53. ต่อก้อนไม้ 2 ชั้น
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_53_1" name="DSPM_53" value="0">
                                    <label for="DSPM_53_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_53_2" name="DSPM_53" value="1">
                                    <label for="DSPM_53_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                            </td>
                            <td align="center">
                                54. เลือกวัตถุตามคำสั่งได้ถูกต้อง 3 ชนิด
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_54_1" name="DSPM_54" value="0">
                                    <label for="DSPM_54_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_54_2" name="DSPM_54" value="1">
                                    <label for="DSPM_54_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                                <br>
                                55. ชี้อวัยวะได้ 1 ส่วน
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_55_1" name="DSPM_55" value="0">
                                    <label for="DSPM_55_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_55_2" name="DSPM_55" value="1">
                                    <label for="DSPM_55_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                            </td>
                            <td align="center">
                                56. พูดเลียนคำที่เด่นหรือคำสุดท้ายของคำพูด
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_56_1" name="DSPM_56" value="0">
                                    <label for="DSPM_56_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_56_2" name="DSPM_56" value="1">
                                    <label for="DSPM_56_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                                <br>
                                57. พูดเป็นคำๆ ได้ 4 คำเรียกชื่อสงของหรือทักทาย(เป็นคำอื่นที่ไม่ใช่ พ่อแม่ ชื่อของคนคุ้นเคยในบ้านหรือชื่อของสัตว์เลี้ยงในบ้าน)
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_57_1" name="DSPM_57" value="0">
                                    <label for="DSPM_57_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_57_2" name="DSPM_57" value="1">
                                    <label for="DSPM_57_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                            </td>
                            <td align="center">
                                58. สนใจ/มองตามสิ่งที่ผู้ใหญ่ชี้ที่อยู่ไกลออกไปอย่างน้อย 3 เมตร
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_58_1" name="DSPM_58" value="0">
                                    <label for="DSPM_58_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_58_2" name="DSPM_58" value="1">
                                    <label for="DSPM_58_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                                <br>
                                59. ดื่มน้ำจากแก้วโดยไม่หก
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_59_1" name="DSPM_59" value="0">
                                    <label for="DSPM_59_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_59_2" name="DSPM_59" value="1">
                                    <label for="DSPM_59_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                            </td>
                            
                        </tr>
                        <tr>
                            <td align="center">
                                30 เดือน(2ปี 6เดือน)
                            </td>
                            <td align="center">
                                70. กระโดดข้ามเชือกบนพื้นไปข้างหน้าได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_70_1" name="DSPM_70" value="0">
                                    <label for="DSPM_70_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_70_2" name="DSPM_70" value="1">
                                    <label for="DSPM_70_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                                <br>
                                71. ขว้างลูกบอลขนาดเล็กได้โดยยกมือขนเหนือศีรษะ
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_71_1" name="DSPM_71" value="0">
                                    <label for="DSPM_71_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_71_2" name="DSPM_71" value="1">
                                    <label for="DSPM_71_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                            </td>
                            <td align="center">
                                72. ต่อก้อนไม้สี่เหลี่ยม ลูกบาศก์เป็นหอสูงได้ 8 ก้อน
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_72_1" name="DSPM_72" value="0">
                                    <label for="DSPM_72_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_72_2" name="DSPM_72" value="1">
                                    <label for="DSPM_72_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                                <br>
                                73. ยื่นวัตถุให้ผู้ทดสอบได้ 1 ชิ้นตามคำสั่ง (รู้จำนวนเท่ากับ1)
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_73_1" name="DSPM_73" value="0">
                                    <label for="DSPM_73_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_73_2" name="DSPM_73" value="1">
                                    <label for="DSPM_73_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                            </td>
                            <td align="center">
                                74. สนใจฟังนิทานได้ นาน 5 นาที 
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_74_1" name="DSPM_74" value="0">
                                    <label for="DSPM_74_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_74_2" name="DSPM_74" value="1">
                                    <label for="DSPM_74_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                                <br>
                                75. วางวัตถุไว้ “ข้างบน”และ“ข้างใต้” ตามคำสั่งได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_75_1" name="DSPM_75" value="0">
                                    <label for="DSPM_75_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_75_2" name="DSPM_75" value="1">
                                    <label for="DSPM_75_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                            </td>
                            <td align="center">
                                76. พูดติดต่อกัน 2 คำ อย่างมีความหมายโดยใช้คำกริยาได้ถูกต้องอย่างน้อย 4 กริยา
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_76_1" name="DSPM_76" value="0">
                                    <label for="DSPM_76_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_76_2" name="DSPM_76" value="1">
                                    <label for="DSPM_76_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                                <br>
                                
                            </td>
                            <td align="center">
                                77. ร้องเพลงได้บางคำหรือร้องเพลงคลอตามทำนอง
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_77_1" name="DSPM_77" value="0">
                                    <label for="DSPM_77_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_77_2" name="DSPM_77" value="1">
                                    <label for="DSPM_77_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                                <br>
                                78. เด็กรู้จักรอให้ถึงรอบของตนเองในการเล่นโดยมีผู้ใหญ่คอยบอก
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_78_1" name="DSPM_78" value="0">
                                    <label for="DSPM_78_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_78_2" name="DSPM_78" value="1">
                                    <label for="DSPM_78_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                            </td>
                            
                        </tr>
                        <tr>
                            <td align="center">
                                42 เดือน (3ปี 6เดือน)
                            </td>
                            <td align="center">
                                90. ยืนขาเดียว 5 วินาที
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_90_1" name="DSPM_90" value="0">
                                    <label for="DSPM_90_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_90_2" name="DSPM_90" value="1">
                                    <label for="DSPM_90_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                                <br>
                                91. ใช้แขนรับลูกบอลได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_91_1" name="DSPM_91" value="0">
                                    <label for="DSPM_91_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_91_2" name="DSPM_91" value="1">
                                    <label for="DSPM_91_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                            </td>
                            <td align="center">
                                92. แยกรปทรงเรขาคณิตได้ 3 แบบ
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_92_1" name="DSPM_92" value="0">
                                    <label for="DSPM_92_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_92_2" name="DSPM_92" value="1">
                                    <label for="DSPM_92_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                                <br>
                                93. ประกอบชิ้นส่วนของรูปภาพที่ถูกตัดออกเป็น 3 ชิ้นได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_93_1" name="DSPM_93" value="0">
                                    <label for="DSPM_93_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_93_2" name="DSPM_93" value="1">
                                    <label for="DSPM_93_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                                <br>
                                94. เขียนรูปวงกลมตามแบบได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_94_1" name="DSPM_94" value="0">
                                    <label for="DSPM_94_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_94_2" name="DSPM_94" value="1">
                                    <label for="DSPM_94_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                            </td>
                            <td align="center">
                                95. วางวัตถุไว้ข้างหน้าและข้างหลังได้ตามคำสั่ง
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_95_1" name="DSPM_95" value="0">
                                    <label for="DSPM_95_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline"></div>
                                    <input type="radio" id="DSPM_95_2" name="DSPM_95" value="1">
                                    <label for="DSPM_95_2">ไม่ผ่าน</label>

                                <br>
                                ว/ด/ป.....................
                                <br>
                                96. เลือกจัดกลุ่มวัตถุตามประเภทเสื้อผ้าได้     
                                <br> 
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_96_1" name="DSPM_96" value="0">
                                    <label for="DSPM_96_1">ผ่าน</label>

                                </div>          
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_96_2" name="DSPM_96" value="1">
                                    <label for="DSPM_96_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                            </td>
                            <td align="center">
                                97. พูดถึงเหตุการณ์ที่เพิ่งผ่านไปใหม่ๆได้
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_97_1" name="DSPM_97" value="0">
                                    <label for="DSPM_97_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_97_2" name="DSPM_97" value="1">
                                    <label for="DSPM_97_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                                <br>
                                98. พูด “ขอ” หรือ “ขอบคุณ” หรือ “ให้” ได้เอง
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_98_1" name="DSPM_98" value="0">
                                    <label for="DSPM_98_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_98_2" name="DSPM_98" value="1">
                                    <label for="DSPM_98_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                            </td>
                            <td align="center">
                                99. บอกเพศของตนเองได้ถูกต้อง
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_99_1" name="DSPM_99" value="0">
                                    <label for="DSPM_99_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_99_2" name="DSPM_99" value="1">
                                    <label for="DSPM_99_2">ไม่ผ่าน</label>

                                </div>
                                <br>
                                ว/ด/ป.....................
                                <br>
                                100. ใส่เสื้อผ่าหน้าได้เองโดยไม่ต้องติดกระดุม
                                <br>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_100_1" name="DSPM_100" value="0">
                                    <label for="DSPM_100_1">ผ่าน</label>

                                </div>
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="DSPM_100_2" name="DSPM_100" value="1">
                                    <label for="DSPM_100_2">ไม่ผ่าน</label>
                                </div>
                                <br>
                                ว/ด/ป.....................
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