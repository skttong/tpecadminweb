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
                <h3 class="card-title">แก้ไข โรงพยาบาล</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{URL::to('/update_hospital/'.$edit->id)}}" method="post" enctype="multipart/form-data">
              	@csrf
                <div class="card-body">

                    <div class="form-group">
                    <label for="exampleInputEmail1">hp_code9</label>
                    <input type="text" name="hp_code9" value="{{$edit->hp_code9}}"  class="form-control @error('hp_code9') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_code9">

                    @error('hp_code9')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">hp_code5</label>
                    <input type="text" name="hp_code5" value="{{$edit->hp_code5}}"  class="form-control @error('hp_code5') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_code5">

                    @error('hp_code5')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">hp_code11</label>
                    <input type="text" name="hp_code11" value="{{$edit->hp_code11}}"  class="form-control @error('hp_code11') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_code11">

                    @error('hp_code11')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">hp_name</label>
                    <input type="text" name="hp_name" value="{{$edit->hp_name}}"  class="form-control @error('hp_name') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_name">

                    @error('hp_name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">hp_typecompany</label>
                    <input type="text" name="hp_typecompany" value="{{$edit->hp_typecompany}}"  class="form-control @error('hp_typecompany') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_typecompany">

                    @error('hp_typecompany')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">hp_type</label>
                    <input type="text" name="hp_type" value="{{$edit->hp_type}}"  class="form-control @error('hp_type') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_type">

                    @error('hp_type')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">hp_affiliation</label>
                    <input type="text" name="hp_affiliation" value="{{$edit->hp_affiliation}}"  class="form-control @error('hp_affiliation') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_affiliation">

                    @error('hp_affiliation')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">hp_department</label>
                    <input type="text" name="hp_department" value="{{$edit->hp_department}}"  class="form-control @error('hp_department') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_department">

                    @error('hp_department')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">hp_usagestatus</label>
                    <input type="text" name="hp_usagestatus" value="{{$edit->hp_usagestatus}}"  class="form-control @error('hp_usagestatus') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_usagestatus">

                    @error('hp_usagestatus')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">hp_uservicearea</label>
                    <input type="text" name="hp_uservicearea" value="{{$edit->hp_uservicearea}}"  class="form-control @error('hp_uservicearea') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_uservicearea">

                    @error('hp_uservicearea')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">hp_address</label>
                    <input type="text" name="hp_address" value="{{$edit->hp_address}}"  class="form-control @error('hp_address') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_address">

                    @error('hp_address')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">hp_province</label>
                    <input type="text" name="hp_province" value="{{$edit->hp_province}}"  class="form-control @error('hp_province') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_province">

                    @error('hp_province')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">hp_district</label>
                    <input type="text" name="hp_district" value="{{$edit->hp_district}}"  class="form-control @error('hp_district') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_district">

                    @error('father')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">hp_subdistrict</label>
                    <input type="text" name="hp_subdistrict" value="{{$edit->hp_subdistrict}}"  class="form-control @error('hp_subdistrict') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_subdistrict">

                    @error('hp_subdistrict')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">hp_moo</label>
                    <input type="text" name="hp_moo" value="{{$edit->hp_moo}}"  class="form-control @error('hp_moo') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_moo">

                    @error('hp_moo')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">hp_portcode</label>
                    <input type="text" name="hp_portcode" value="{{$edit->hp_portcode}}"  class="form-control @error('hp_portcode') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_portcode">

                    @error('hp_portcode')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">hp_phone</label>
                    <input type="text" name="hp_phone" value="{{$edit->hp_phone}}"  class="form-control @error('hp_phone') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="hp_phone">

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