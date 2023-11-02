@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <b> {{ Auth::user()->name }} </b>  {{ __('You are logged in!') }}-->
                   <!-- form start -->
                    <form role="form" action="{{URL::to('/homesearch')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                        <div class="form-group">
                    <label for="exampleInputEmail1">เขตสุภาพที่</label>
                   <!-- <input type="text" name="province"  class="form-control @error('province') is-invalid @enderror"
                    id="exampleInputEmail1" placeholder="Enter Slug Name">-->
              
                    <select class="form-control" id="health_zone" name="health_zone">
                        <option value="">Select เขตสุภาพที่ {{$health_zone}}</option>
                        <option value="1">เขตสุภาพที่ 1</option>   
                        <option value="2">เขตสุภาพที่ 2</option>   
                        <option value="3">เขตสุภาพที่ 3</option>   
                        <option value="4">เขตสุภาพที่ 4</option>   
                        <option value="5">เขตสุภาพที่ 5</option>  
                        <option value="6">เขตสุภาพที่ 6</option>   
                        <option value="7">เขตสุภาพที่ 7</option>   
                        <option value="8">เขตสุภาพที่ 8</option>   
                        <option value="9">เขตสุภาพที่ 9</option>   
                        <option value="10">เขตสุภาพที่ 10</option>  
                        <option value="11">เขตสุภาพที่ 11</option>  
                        <option value="12">เขตสุภาพที่ 12</option>  
                        <option value="13">เขตสุภาพที่ 13</option>                             
                    </select>



                    @error('health_zone')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">จังหวัด</label>
                        <!-- <input type="text" name="province"  class="form-control @error('province') is-invalid @enderror"
                            id="exampleInputEmail1" placeholder="Enter Slug Name">-->
                    
                            <select class="form-control" id="province" name="province" >
                                <option value="">Select จังหวัด {{$province}}</option>
        
                                    @foreach ($provincedata as $country) 
                                        <option value="{{$country->province}}">
                                        {{$country->province}}
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
                        <!-- <input type="text" name="province"  class="form-control @error('province') is-invalid @enderror"
                            id="exampleInputEmail1" placeholder="Enter Slug Name">-->
                    
                            <select class="form-control" id="district" name="district">
                                <option value="">Select อำเภอ{{$district}}</option>
        
                                    @foreach ($districtdata as $districtdb) 
                                        <option value="{{$districtdb->district}}">
                                        {{$districtdb->district}}
                                        </option>
                                    @endforeach
                                    
                                </select>



                            @error('district')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                        
                        </div>
                        <!-- /.card-body -->
                 

                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                   <!-- {{$province}}-->
                </div>
          
            </div>
        </div>
    </div>
    <!-- row -->
    <div class="row">
          <div class="col-12">
            <!-- jQuery Knob -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                    ผลลัพธ์ก่อนเข้าร่วมกลุ่ม Triple-P
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-6 col-md-4 text-center">
                    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                    <!--<div class="knob-label">New Visitors</div>-->
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-4 text-center">
                    <canvas id="myChart1" style="width:100%;max-width:600px"></canvas>
                    <!--<div class="knob-label">Bounce Rate</div>-->
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-4 text-center">
                    <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>

                    <!--<div class="knob-label">Server Load</div>-->
                  </div>
                  <!-- ./col -->
                 <!-- <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="40" data-width="90" data-height="90" data-fgColor="#00c0ef">

                    <div class="knob-label">Disk Space</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="col-3 col-md-2 text-center">
                     <!--<canvas id="myChart3" style="width:100%;max-width:600px"></canvas>-->
                            <!--<div class="knob-label">Bandwidth</div>-->
                  </div> 
                  <!-- ./col -->
                  <div class="col-6 col-md-4 text-center">
                    <canvas id="myChart3" style="width:100%;max-width:600px"></canvas>
                    <!--<div class="knob-label">Bandwidth</div>-->
                  </div> 
                  <!-- ./col -->
                  <div class="col-6 col-md-4 text-center">
                    <canvas id="myChart4" style="width:100%;max-width:600px"></canvas>
                    <!--<div class="knob-label">CPU</div>-->
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <!-- ./col -->
                  <div class="col-6 text-center">
                    <canvas id="myChart10" style="width:100%;max-width:600px"></canvas>
                    <!--<div class="knob-label">Bandwidth</div>-->
                  </div> 
                  <!-- ./col -->
                  <div class="col-6 text-center">
                    <canvas id="myChart11" style="width:100%;max-width:600px"></canvas>
                    <!--<div class="knob-label">CPU</div>-->
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
                <div class="row">
                  <!-- ./col -->
                  <div class="col-6 text-center">
                    <canvas id="myChart14" style="width:100%;max-width:600px"></canvas>
                    <!--<div class="knob-label">Bandwidth</div>-->
                  </div> 
                  <!-- ./col -->
                  <div class="col-6 text-center">
                    <canvas id="myChart15" style="width:100%;max-width:600px"></canvas>
                    <!--<div class="knob-label">CPU</div>-->
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

         <!-- row -->
    <div class="row">
          <div class="col-12">
            <!-- jQuery Knob -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  ผลลัพธ์หลังเข้าร่วมกลุ่ม Triple-P
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-6 col-md-4 text-center">
                    <canvas id="myChart5" style="width:100%;max-width:600px"></canvas>
                    <!--<div class="knob-label">New Visitors</div>-->
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-4 text-center">
                    <canvas id="myChart6" style="width:100%;max-width:600px"></canvas>
                    <!--<div class="knob-label">Bounce Rate</div>-->
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-4 text-center">
                    <canvas id="myChart7" style="width:100%;max-width:600px"></canvas>

                    <!--<div class="knob-label">Server Load</div>-->
                  </div>
                  <!-- ./col -->
                 <!-- <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="40" data-width="90" data-height="90" data-fgColor="#00c0ef">

                    <div class="knob-label">Disk Space</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="col-3 col-md-2 text-center">
                     <!--<canvas id="myChart3" style="width:100%;max-width:600px"></canvas>-->
                            <!--<div class="knob-label">Bandwidth</div>-->
                  </div> 
                  <!-- ./col -->
                  <div class="col-6 col-md-4 text-center">
                    <canvas id="myChart8" style="width:100%;max-width:600px"></canvas>
                    <!--<div class="knob-label">Bandwidth</div>-->
                  </div> 
                  <!-- ./col -->
                  <div class="col-6 col-md-4 text-center">
                    <canvas id="myChart9" style="width:100%;max-width:600px"></canvas>
                    <!--<div class="knob-label">CPU</div>-->
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <!-- ./col -->
                  <div class="col-6 text-center">
                    <canvas id="myChart12" style="width:100%;max-width:600px"></canvas>
                    <!--<div class="knob-label">Bandwidth</div>-->
                  </div> 
                  <!-- ./col -->
                  <div class="col-6 text-center">
                    <canvas id="myChart13" style="width:100%;max-width:600px"></canvas>
                    <!--<div class="knob-label">CPU</div>-->
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <!-- ./col -->
                  <div class="col-6 text-center">
                    <canvas id="myChart16" style="width:100%;max-width:600px"></canvas>
                    <!--<div class="knob-label">Bandwidth</div>-->
                  </div> 
                  <!-- ./col -->
                  <div class="col-6 text-center">
                    <canvas id="myChart17" style="width:100%;max-width:600px"></canvas>
                    <!--<div class="knob-label">CPU</div>-->
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    <?php /*
    <div class="row">
              <div class="col-md-12">
                
                <!-- DIRECT CHAT -->
                <div class="card direct-chat direct-chat-warning">
                  <div class="card-header">
                    <h3 class="card-title">Direct Chat</h3>

                    <!--<div class="card-tools">
                      <span title="3 New Messages" class="badge badge-warning">3</span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                        <i class="fas fa-comments"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>-->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                  </div>
                  
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <!--<a href="javascript:">View All Users</a>-->
                  </div>
                  <!-- /.card-footer -->
                    
                </div>
                <!--/.direct-chat -->
              </div>
              <!-- /.col -->

              <div class="col-md-6">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Latest Members</h3>

                    <!--<div class="card-tools">
                      <span class="badge badge-danger">8 New Members</span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>-->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <canvas id="myChart1" style="width:100%;max-width:600px"></canvas>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <!--<a href="javascript:">View All Users</a>-->
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <!-- DIRECT CHAT -->
                <div class="card direct-chat direct-chat-warning">
                  <div class="card-header">
                    <h3 class="card-title">Direct Chat</h3>

                    <!--<div class="card-tools">
                      <span title="3 New Messages" class="badge badge-warning">3</span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                        <i class="fas fa-comments"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>-->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                        <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <!--<a href="javascript:">View All Users</a>-->
                  </div>
                  <!-- /.card-footer -->
                    
                </div>
                <!--/.direct-chat -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <!-- DIRECT CHAT -->
                <div class="card direct-chat direct-chat-warning">
                  <div class="card-header">
                    <h3 class="card-title">Direct Chat</h3>

                    <!--<div class="card-tools">
                      <span title="3 New Messages" class="badge badge-warning">3</span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                        <i class="fas fa-comments"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>-->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                        <canvas id="myChart3" style="width:100%;max-width:600px"></canvas>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <!--<a href="javascript:">View All Users</a>-->
                  </div>
                  <!-- /.card-footer -->
                    
                </div>
                <!--/.direct-chat -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <!-- DIRECT CHAT -->
                <div class="card direct-chat direct-chat-warning">
                  <div class="card-header">
                    <h3 class="card-title">Direct Chat</h3>

                    <!--<div class="card-tools">
                      <span title="3 New Messages" class="badge badge-warning">3</span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                        <i class="fas fa-comments"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>-->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                        <canvas id="myChart4" style="width:100%;max-width:600px"></canvas>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <!--<a href="javascript:">View All Users</a>-->
                  </div>
                  <!-- /.card-footer -->
                    
                </div>
                <!--/.direct-chat -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            */ ?>
</div>

<script>
var xValues = ["ร้อยละสมวัย", "ร้อยละไม่สมวัย"];
var yValues = [{{$list[0]->PreGM0p}}, {{$list[0]->PreGM1p}}];
var barColors = [
  "#2b5797",
  "#1e7145"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "พัฒนาการด้านกล้ามเนื้อมัดใหญ่ (Gross motor)"
    }
  }
});
</script>

<script>
var xValues = ["ร้อยละสมวัย", "ร้อยละไม่สมวัย"];
var yValues = [{{$list[0]->PreFM0p}}, {{$list[0]->PreFM1p}}];
var barColors = [
  "#b91d47",
  "#00aba9"
];

new Chart("myChart1", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "พัฒนาการด้านกล้ามเนื้อมัดเล็ก (Fine motor)"
    }
  }
});
</script>

<script>
var xValues = ["ร้อยละสมวัย", "ร้อยละไม่สมวัย"];
var yValues = [{{$list[0]->PreRL0p}}, {{$list[0]->PreRL1p}}];
var barColors = [
  "#b91d47",
  "#1e7145"
];

new Chart("myChart2", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "พัฒนาการด้านความเข้าใจภาษา (Receptive language)"
    }
  }
});
</script>

<script>
var xValues = ["ร้อยละสมวัย", "ร้อยละไม่สมวัย"];
var yValues = [{{$list[0]->PreEL0p}}, {{$list[0]->PreEL1p}}];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart3", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "พัฒนาการด้านการใช้ภาษา (Expressive language)"
    }
  }
});
</script>

<script>
var xValues = ["ร้อยละสมวัย", "ร้อยละไม่สมวัย"];
var yValues = [{{$list[0]->PrePS0p}}, {{$list[0]->PrePS1p}}];
var barColors = [
  "#b91d47",
  "#2b5797"
];

new Chart("myChart4", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "พัฒนาการด้านทักษะสังคมและการช่วยเหลือตัวเอง (Personal-social)"
    }
  }
});
</script>

<script>
var xValues = ["ร้อยละสมวัย", "ร้อยละไม่สมวัย"];
var yValues = [{{$list[0]->PostGM0p}}, {{$list[0]->PostGM1p}}];
var barColors = [
  "#2b5797",
  "#1e7145"
];

new Chart("myChart5", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "พัฒนาการด้านกล้ามเนื้อมัดใหญ่ (Gross motor)"
    }
  }
});
</script>

<script>
var xValues = ["ร้อยละสมวัย", "ร้อยละไม่สมวัย"];
var yValues = [{{$list[0]->PostFM0p}}, {{$list[0]->PostFM1p}}];
var barColors = [
  "#b91d47",
  "#00aba9"
];

new Chart("myChart6", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "พัฒนาการด้านกล้ามเนื้อมัดเล็ก (Fine motor)"
    }
  }
});
</script>

<script>
var xValues = ["ร้อยละสมวัย", "ร้อยละไม่สมวัย"];
var yValues = [{{$list[0]->PostRL0p}}, {{$list[0]->PostRL1p}}];
var barColors = [
  "#b91d47",
  "#1e7145"
];

new Chart("myChart7", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "พัฒนาการด้านความเข้าใจภาษา (Receptive language)"
    }
  }
});
</script>

<script>
var xValues = ["ร้อยละสมวัย", "ร้อยละไม่สมวัย"];
var yValues = [{{$list[0]->PostEL0p}}, {{$list[0]->PostEL1p}}];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart8", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "พัฒนาการด้านการใช้ภาษา (Expressive language)"
    }
  }
});
</script>

<script>
var xValues = ["ร้อยละสมวัย", "ร้อยละไม่สมวัย"];
var yValues = [{{$list[0]->PostPS0p}}, {{$list[0]->PostPS1p}}];
var barColors = [
  "#b91d47",
  "#2b5797"
];

new Chart("myChart9", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "พัฒนาการด้านทักษะสังคมและการช่วยเหลือตัวเอง (Personal-social)"
    }
  }
});
</script>

<script>
var xValues = ["พัฒนาการสมวัยก่อนเข้ากลุ่ม Triple-P", "สงสัยล่าช้าก่อนเข้ากลุ่ม Triple-P"];
var yValues = [{{$list[0]->PreDelay0p}}, {{$list[0]->PreDelay1_5totalp}}];
var barColors = [
  "#b91d47",
  "#2b5797"
];

new Chart("myChart10", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "ผลลัพธ์พัฒนาการก่อนเข้ากลุ่ม Triple-P"
    }
  }
});
</script>

<script>
var xValues = ["สงสัยล่าช้า 1 ด้าน", "สงสัยล่าช้า 2 ด้าน", "สงสัยล่าช้า 3 ด้าน", "สงสัยล่าช้า 4 ด้าน", "สงสัยล่าช้า 5 ด้าน"];
var yValues = [{{$list[0]->PreDelay1p}},{{$list[0]->PreDelay2p}},{{$list[0]->PreDelay3p}},{{$list[0]->PreDelay4p}},{{$list[0]->PreDelay5p}}];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart11", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "สงสัยพัฒนาการล่าช้า รายด้าน"
    }
  }
});
</script>

<script>
var xValues = ["พัฒนาการสมวัยหลังเข้ากลุ่ม Triple-P ครบ 4 ครั้ง", "สงสัยล่าช้าหลังเข้ากลุ่ม Triple-P ครบ 4 ครั้ง"];
var yValues = [{{$list[0]->PostDelay0p}}, {{$list[0]->PostDelay1_5totalp}}];
var barColors = [
  "#b91d47",
  "#2b5797"
];

new Chart("myChart12", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "ผลลัพธ์พัฒนาการหลังเข้ากลุ่ม Triple-P"
    }
  }
});
</script>

<script>
var xValues = ["สงสัยล่าช้า 1 ด้าน", "สงสัยล่าช้า 2 ด้าน", "สงสัยล่าช้า 3 ด้าน", "สงสัยล่าช้า 4 ด้าน", "สงสัยล่าช้า 5 ด้าน"];
var yValues = [{{$list[0]->PostDelay1p}},{{$list[0]->PostDelay2p}},{{$list[0]->PostDelay3p}},{{$list[0]->PostDelay4p}},{{$list[0]->PostDelay5p}}];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart13", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "สงสัยพัฒนาการล่าช้า รายด้าน"
      
    }
  }
});
</script>

<script>
    var densityCanvas = document.getElementById("myChart14");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 12;

var densityData = {
  label: 'ร้อยละ EQ ปกติ',
  data: [{{$list[0]->PreEQgood0p}},{{$list[0]->PreEQexpert0p}},{{$list[0]->PreEQhappy0p}},{{$list[0]->PreEqtotal0p}}],
  backgroundColor: 'rgba(0, 99, 132, 0.6)',
  borderColor: 'rgba(0, 99, 132, 1)',
  yAxisID: "y-axis-density"
};
 
var gravityData = {
  label: 'ร้อยละ EQ ต่ำ',
  data: [{{$list[0]->PreEQgood1p}},{{$list[0]->PreEQexpert1p}},{{$list[0]->PreEQhappy1p}},{{$list[0]->PreEqtotal1p}}],
  backgroundColor: 'rgba(99, 132, 0, 0.6)',
  borderColor: 'rgba(99, 132, 0, 1)',
  yAxisID: "y-axis-gravity"
};
 
var planetData = {
  labels: ["Pre-EQ ด้านดี", "Pre-EQ ด้านเก่ง", "Pre-EQ ด้านสุข", "รวมผลลัพธ์ก่อนเข้ากลุ่ม Triple-P"],
  datasets: [densityData, gravityData]
};
 
var chartOptions = {
  scales: {
    xAxes: [{
      barPercentage: 1,
      categoryPercentage: 0.6
    }],
    yAxes: [{
      id: "y-axis-density"
    }, {
      id: "y-axis-gravity"
    }]
  }
};
 
var barChart = new Chart(densityCanvas, {
  type: 'bar',
  data: planetData,
  options: chartOptions
});
</script>

<script>
var xValues = ["ร้อยละผ่าน", "ร้อยละไม่ผ่าน"];
var yValues = [{{$list[0]->PrePPPtotal0p}}, {{$list[0]->PrePPPtotal1p}}];
var barColors = [
  "#b91d47",
  "#2b5797"
];

new Chart("myChart15", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "ทักษะการเลี้ยงดูเด็กปฐมวัยของผู้ปกครอง ก่อนเข้ากลุ่ม Triple-P"
    }
  }
});
</script>

<script>
    var densityCanvas = document.getElementById("myChart16");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 12;

var densityData = {
  label: 'ร้อยละ EQ ปกติ',
  data: [{{$list[0]->PostEQgood0p}},{{$list[0]->PostEQexpert0p}},{{$list[0]->PostEQhappy0p}},{{$list[0]->PostEqtotal0p}}],
  backgroundColor: 'rgba(0, 99, 132, 0.6)',
  borderColor: 'rgba(0, 99, 132, 1)',
  yAxisID: "y-axis-density"
};
 
var gravityData = {
  label: 'ร้อยละ EQ ต่ำ',
  data: [{{$list[0]->PostEQgood1p}},{{$list[0]->PostEQexpert1p}},{{$list[0]->PostEQhappy1p}},{{$list[0]->PostEqtotal1p}}],
  backgroundColor: 'rgba(99, 132, 0, 0.6)',
  borderColor: 'rgba(99, 132, 0, 1)',
  yAxisID: "y-axis-gravity"
};
 
var planetData = {
  labels: ["Pre-EQ ด้านดี", "Pre-EQ ด้านเก่ง", "Pre-EQ ด้านสุข", "รวมผลลัพธ์หลังเข้ากลุ่ม Triple-P"],
  datasets: [densityData, gravityData]
};
 
var chartOptions = {
  scales: {
    xAxes: [{
      barPercentage: 1,
      categoryPercentage: 0.6
    }],
    yAxes: [{
      id: "y-axis-density"
    }, {
      id: "y-axis-gravity"
    }]
  }
};
 
var barChart = new Chart(densityCanvas, {
  type: 'bar',
  data: planetData,
  options: chartOptions
});
</script>

<script>
var xValues = ["ร้อยละผ่าน", "ร้อยละไม่ผ่าน"];
var yValues = [{{$list[0]->PostPPPtotal0p}}, {{$list[0]->PostPPPtotal1p}}];
var barColors = [
  "#b91d47",
  "#2b5797"
];

new Chart("myChart17", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "ทักษะการเลี้ยงดูเด็กปฐมวัยของผู้ปกครอง หลังเข้ากลุ่ม Triple-P"
    }
  }
});
</script>

@endsection
