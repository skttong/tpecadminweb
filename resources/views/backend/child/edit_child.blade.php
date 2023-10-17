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
                <h3 class="card-title">Edit เด็ก</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{URL::to('/update_child/'.$edit->id)}}" method="post" enctype="multipart/form-data">
              	@csrf
                <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputEmail1">คำนำหน้า</label>
                    <input type="text" name="prefix" value="{{$edit->prefix}}"  class="form-control @error('title') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="กรอกคำนำหน้า">

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                <div class="form-group">
                <label for="exampleInputEmail1">ชื่อ</label>
                <input type="text" name="names" value="{{$edit->names}}"  class="form-control @error('names') is-invalid @enderror"
                id="exampleInputEmail1" placeholder="Enter Book Category Name">

                @error('names')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">นามสกุล</label>
                <input type="text" name="surnames" value="{{$edit->surnames}}"  class="form-control @error('surnames') is-invalid @enderror"
                id="exampleInputEmail1" placeholder="Enter Slug Name">

                @error('surnames')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">เลขบัตรประชาชน</label>
                    <input type="text" name="idcard" value="{{$edit->idcard}}" class="form-control @error('idcard') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('idcard')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">เพศ</label>
                    <input type="text" name="gender"  value="{{$edit->gender}}" class="form-control @error('gender') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('gender')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">วันเกิด</label>
                    <input type="text" name="date_of_birth" value="{{$edit->date_of_birth}}" class="form-control @error('date_of_birth') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('date_of_birth')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">อายุ</label>
                    <input type="text" name="age" value="{{$edit->age}}" class="form-control @error('age') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('age')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">ที่อยู่</label>
                    <input type="text" name="address" value="{{$edit->address}}"  class="form-control @error('address') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('address')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">ตำบล</label>
                    <input type="text" name="subdistrict" value="{{$edit->subdistrict}}"  class="form-control @error('subdistrict') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('subdistrict')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">อำเภอ</label>
                    <input type="text" name="district" value="{{$edit->district}}"  class="form-control @error('district') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('district')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">จังหวัด</label>
                    <input type="text" name="province" value="{{$edit->province}}"  class="form-control @error('province') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('province')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">รหัสไปรษณีย์</label>
                    <input type="text" name="portcode" value="{{$edit->portcode}}"  class="form-control @error('portcode') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('portcode')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">โทรศัพท์</label>
                    <input type="text" name="phone" value="{{$edit->phone}}" class="form-control @error('phone') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อ-นามสกุล พ่อ</label>
                    <input type="text" name="father" value="{{$edit->father}}"  class="form-control @error('father') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('father')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">โทรศัพท์พ่อ</label>
                    <input type="text" name="phone_f" value="{{$edit->phone_f}}"  class="form-control @error('phone_f') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('phone_f')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อ-นามสกุล แม่</label>
                    <input type="text" name="mother" value="{{$edit->mother}}" class="form-control @error('mother') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter mother Name">

                    @error('mother')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">โทรศัพท์แม่</label>
                    <input type="text" name="phone_m" value="{{$edit->phone_m}}" class="form-control @error('phone_m') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('phone_m')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">โรงเรียน</label>
                    <input type="text" name="schoolcode" value="{{$edit->schoolcode}}"  class="form-control @error('schoolcode') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('schoolcode')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">โรงพยาบาล</label>
                    <input type="text" name="hcode9" value="{{$edit->hcode9}}" class="form-control @error('hcode9') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">

                    @error('hcode9')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>


                 
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