

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{('backend/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition register-page" style="background-image: url({{('backend/dist/img/bghome.jpg')}});">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/" class="h1"><b>Register </b> </a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form method="POST" action="{{ route('regiInsert') }}">
                        @csrf
        <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Full name" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input id="email" type="email"   placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email"
         value="{{ old('email') }}" required  autofocus>

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
<div class="input-group mb-3">
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required
autocomplete="new-password"  placeholder="Password">

@error('password')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>


<div class="input-group mb-3">
<input id="password-confirm" type="password"   placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">


@error('password')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>

<div class="input-group mb-3">
          <input type="text" name="agency" class="form-control" placeholder="agency" value="user" autofocus readonly>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="position" class="form-control" placeholder="ตำแหน่ง" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="address" class="form-control" placeholder="ที่อยู่" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
    <!--
        <div class="input-group mb-3">
          <input type="text" name="agency4" class="form-control" placeholder="อำเภอ" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="agency5" class="form-control" placeholder="ตำบล" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="agency6" class="form-control" placeholder="จังหวัด" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
-->
        <div class="form-group">
                    <label for="exampleInputEmail1">จังหวัด</label>
                   <!-- <input type="text" name="province"  class="form-control @error('province') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">-->
              
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
                    <label for="exampleInputEmail1">อำเภอ</label>
                    <!--<input type="text" name="district"  class="form-control @error('district') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">-->
                    <select id="district" class="form-control">
                    </select>

                    @error('district')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">ตำบล</label>
                    <!--<input type="text" name="subdistrict"  class="form-control @error('subdistrict') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">-->
                    <select id="subdistrict" class="form-control">
                    </select>

                    @error('subdistrict')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#province').on('change', function () {
                var idCountry = this.value;

                //alert(idCountry);

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



        <div class="input-group mb-3">
          <p class="login-box-msg">เป็นบุคลากร</p>
          <div class="input-group-append">
            <input type="radio" id="type_01_1" name="type_01" value="บุคลากรทางการศึกษา"> <label for="type_01_1" >บุคลากรทางการศึกษา</label>
            <input type="radio" id="type_01_2" name="type_01" value="บุคลากรสาธารณสุข"> <label for="type_01_2" >บุคลากรสาธารณสุข</label>
          </div>
        </div>

    
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <!--<a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>-->
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="{{route('login')}}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->



<!-- jQuery -->
<script src="{{('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{('backend/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
