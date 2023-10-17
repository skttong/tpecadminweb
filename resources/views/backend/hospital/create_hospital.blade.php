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
                <h3 class="card-title">Add โรงพยาบาล</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{URL::to('/insert_hospital')}}" method="post" enctype="multipart/form-data">
              	@csrf
                <div class="card-body">

                    <div class="form-group">
                    <label for="exampleInputEmail1">hp_code9</label>
                    <input type="text" name="hp_code9"  class="form-control @error('hp_code9') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_code9">

                    @error('hp_code9')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">hp_code5</label>
                    <input type="text" name="hp_code5"  class="form-control @error('hp_code5') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_code5">

                    @error('hp_code5')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">hp_code11</label>
                    <input type="text" name="hp_code11"  class="form-control @error('hp_code11') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_code11">

                    @error('hp_code11')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อโรงพยาบาล</label>
                    <input type="text" name="hp_name"  class="form-control @error('hp_name') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_name">

                    @error('hp_name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">หน่วยงานของรัฐ/เอกชน</label>
                    <input type="text" name="hp_typecompany"  class="form-control @error('hp_typecompany') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_typecompany">

                    @error('hp_typecompany')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">ประเภทโรงพยาบาล</label>
                    <input type="text" name="hp_type"  class="form-control @error('hp_type') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_type">

                    @error('hp_type')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">สังกัด</label>
                    <input type="text" name="hp_affiliation"  class="form-control @error('hp_affiliation') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_affiliation">

                    @error('hp_affiliation')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">สังกัดกรม</label>
                    <input type="text" name="hp_department"  class="form-control @error('hp_department') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_department">

                    @error('hp_department')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">สถานะ</label>
                    <input type="text" name="hp_usagestatus"  class="form-control @error('hp_usagestatus') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_usagestatus">

                    @error('hp_usagestatus')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">เขตสุขภาพ</label>
                    <input type="text" name="hp_uservicearea"  class="form-control @error('hp_uservicearea') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_uservicearea">

                    @error('hp_uservicearea')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">ที่อยู่</label>
                    <input type="text" name="hp_address"  class="form-control @error('hp_address') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('hp_address')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">จังหวัด</label>
                    <input type="text" name="hp_province"  class="form-control @error('hp_province') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_province">

                    @error('hp_province')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">อำเภอ</label>
                    <input type="text" name="hp_district"  class="form-control @error('hp_district') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_district">

                    @error('father')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">ตำบล</label>
                    <input type="text" name="hp_subdistrict"  class="form-control @error('hp_subdistrict') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_subdistrict">

                    @error('hp_subdistrict')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">hp_moo</label>
                    <input type="text" name="hp_moo"  class="form-control @error('hp_moo') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_moo">

                    @error('hp_moo')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">รหัสไปษณีย์</label>
                    <input type="text" name="hp_portcode"  class="form-control @error('hp_portcode') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_portcode">

                    @error('hp_portcode')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">เบอร์โทรศัพท์</label>
                    <input type="text" name="hp_phone"  class="form-control @error('hp_phone') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('hp_phone')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                           


                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-sm">ตกลง</button>
                  <a href="{{URL::to('/list_hospital')}}" ><button type="button" class="btn btn-danger btn-sm">ย้อนกลับ</button></a>
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