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
                <h3 class="card-title">Add โรงเรียน</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{URL::to('/update_school/'.$edit->id)}}" method="post" enctype="multipart/form-data">
              	@csrf
                <div class="card-body">

                    <div class="form-group">
                    <label for="exampleInputEmail1">sc_type</label>
                    <input type="text" name="sc_type" value="{{$edit->sc_type}}"  class="form-control @error('sc_type') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="sc_type">

                    @error('sc_type')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">sc_sector</label>
                    <input type="text" name="sc_sector" value="{{$edit->sc_sector}}"  class="form-control @error('sc_sector') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="sc_sector">

                    @error('sc_sector')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">sc_schoolnum</label>
                    <input type="text" name="sc_schoolnum" value="{{$edit->sc_schoolnum}}"  class="form-control @error('sc_schoolnum') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="sc_schoolnum">

                    @error('sc_schoolnum')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">sc_schoolname</label>
                    <input type="text" name="sc_schoolname" value="{{$edit->sc_schoolname}}"  class="form-control @error('sc_schoolname') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="sc_schoolname">

                    @error('sc_schoolname')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">sc_subdistrict</label>
                    <input type="text" name="sc_subdistrict" value="{{$edit->sc_subdistrict}}"  class="form-control @error('sc_subdistrict') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="sc_subdistrict">

                    @error('sc_subdistrict')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">sc_district</label>
                    <input type="text" name="sc_district" value="{{$edit->sc_district}}"  class="form-control @error('sc_district') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="sc_district">

                    @error('sc_district')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">sc_province</label>
                    <input type="text" name="sc_province" value="{{$edit->sc_province}}"  class="form-control @error('sc_province') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="sc_province">

                    @error('sc_province')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">sc_area</label>
                    <input type="text" name="sc_area" value="{{$edit->sc_area}}"  class="form-control @error('sc_area') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="sc_area">

                    @error('sc_area')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">sc_moo</label>
                    <input type="text" name="sc_moo" value="{{$edit->sc_moo}}"  class="form-control @error('sc_moo') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="sc_moo">

                    @error('sc_moo')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">sc_mooname</label>
                    <input type="text" name="sc_mooname" value="{{$edit->sc_mooname}}"  class="form-control @error('sc_mooname') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="sc_mooname">

                    @error('sc_mooname')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">sc_portcode</label>
                    <input type="text" name="sc_portcode" value="{{$edit->sc_portcode}}"  class="form-control @error('sc_portcode') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="sc_portcode">

                    @error('sc_portcode')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">sc_phone</label>
                    <input type="text" name="sc_phone" value="{{$edit->sc_phone}}"  class="form-control @error('sc_phone') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="sc_phone">

                    @error('sc_phone')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">sc_lat</label>
                    <input type="text" name="sc_lat" value="{{$edit->sc_lat}}"  class="form-control @error('sc_lat') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="sc_lat">

                    @error('sc_lat')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">sc_long</label>
                    <input type="text" name="sc_long" value="{{$edit->sc_long}}"  class="form-control @error('sc_long') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="sc_long">

                    @error('sc_long')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-sm">ตกลง</button>
                  <a href="{{URL::to('/list_school')}}" ><button type="button" class="btn btn-danger btn-sm">ย้อนกลับ</button></a>
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