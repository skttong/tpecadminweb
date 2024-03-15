@extends('backend.layouts.app')
@section('content')

<div class="card-body">
    <div class="row">

      <div class="col-md-2">

      </div>
                     <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Childen</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{URL::to('/insert_child')}}" method="post" enctype="multipart/form-data">
              	@csrf
                <div class="card-body">

                    <div class="form-group">
                    <label for="exampleInputEmail1">คำนำหน้า</label>
                    <input type="text" name="prefix"  class="form-control @error('title') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="กรอกคำนำหน้า">

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อ</label>
                    <input type="text" name="names"  class="form-control @error('title') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="กรอกชื่อ">

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">นามสกุล</label>
                    <input type="text" name="surnames"  class="form-control @error('title') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="กรอกนามสุกล">

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">เลขบัตรประชาชน</label>
                    <input type="text" name="idcard"  class="form-control @error('idcard') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('idcard')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">เพศ</label>
                    <input type="text" name="gender"  class="form-control @error('gender') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('gender')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">วันเกิด</label>
                    <input type="date" name="date_of_birth"  class="form-control @error('date_of_birth') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('date_of_birth')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">อายุ</label>
                    <input type="text" name="age"  class="form-control @error('age') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('age')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <!--
                    <div class="form-group">
                    <label for="exampleInputEmail1">ที่อยู่</label>
                    <input type="text" name="address"  class="form-control @error('address') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('address')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">ตำบล</label>-->
                    <!--<input type="text" name="subdistrict"  class="form-control @error('subdistrict') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">-->
                    <!--<select id="subdistrict" class="form-control">
                    </select>

                    @error('subdistrict')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    

                    <div class="form-group">
                    <label for="exampleInputEmail1">อำเภอ</label>
                    <!--<input type="text" name="district"  class="form-control @error('district') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">-->
                   <!-- <select id="district" class="form-control">
                    </select>

                    @error('district')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">จังหวัด</label>
                   <!-- <input type="text" name="province"  class="form-control @error('province') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">-->
              <!--
                    <select class="form-control" id="province">
                          <option value="">Select Country</option>
 
                            @foreach ($provinces as $country) 
                                <option value="{{$country->PROVINCE_ID}}">
                                 {{$country->PROVINCE_NAME}}
                                </option>
                            @endforeach
                             
                          </select>



                    @error('province')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">รหัสไปรษณีย์</label>
                    <input type="text" name="portcode"  class="form-control @error('portcode') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('portcode')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">โทรศัพท์</label>
                    <input type="text" name="phone"  class="form-control @error('phone') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>-->

                    <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อ-นามสกุล พ่อ</label>
                    <input type="text" name="father"  class="form-control @error('father') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('father')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">โทรศัพท์พ่อ</label>
                    <input type="text" name="phone_f"  class="form-control @error('phone_f') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('phone_f')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อ-นามสกุล แม่</label>
                    <input type="text" name="mother"  class="form-control @error('mother') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter mother Name">

                    @error('mother')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">โทรศัพท์แม่</label>
                    <input type="text" name="phone_m"  class="form-control @error('phone_m') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('phone_m')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">โรงเรียน</label>
                    <!--<input type="text" name="schoolcode"  class="form-control @error('schoolcode') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">-->

                    <select class="form-control" id="schoolcode">
                          <option value="">Select school</option>
 
                            @foreach ($school as $schools) 
                                <option value="{{$schools->sc_schoolnum}}">
                                 {{$schools->sc_schoolname}}
                                </option>
                            @endforeach
                             
                          </select>

                    

                    @error('schoolcode')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
<!--
                    <div class="form-group">
                    <label for="exampleInputEmail1">โรงพยาบาล</label>
                    <!--<input type="text" name="hcode9"  class="form-control @error('hcode9') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">-->
<!--
                    <select class="form-control" id="hcode9">
                          <option value="">Select hospital</option>
 
                            @foreach ($hospital as $hospitals) 
                                <option value="{{$hospitals->hp_code9}}">
                                 {{$hospitals->hp_name}}
                                </option>
                            @endforeach
                             
                          </select>

                    @error('hcode9')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

-->


                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-sm">ตกลง</button>
                  <a href="{{URL::to('/list_child')}}" ><button type="button" class="btn btn-danger btn-sm">ย้อนกลับ</button></a>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#province').on('change', function () {
                var idCountry = this.value;
                $("#district").html('');
                $.ajax({
                    url: "{{url('api/fetch-amphur')}}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#district').html('<option value="">Select State</option>');
                        $.each(result.amphur, function (key, value) {
                            $("#district").append('<option value="' + value
                                .AMPHUR_ID + '">' + value.AMPHUR_NAME + '</option>');
                        });
                        $('#subdistrict').html('<option value="">Select City</option>');
                    }
                });
            });
            $('#district').on('change', function () {
                var idState = this.value;
                $("#subdistrict").html('');
                $.ajax({
                    url: "{{url('api/fetch-district')}}",
                    type: "POST",
                    data: {
                        state_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        $('#subdistrict').html('<option value="">Select City</option>');
                        $.each(res.district, function (key, value) {
                            $("#subdistrict").append('<option value="' + value
                                .DISTRICT_ID + '">' + value.DISTRICT_NAME + '</option>');
                        });
                    }
                });
            });
        });

    </script>  
              

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