@extends('layouts.admin')  
@section('content')  
<div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Reservations</p>
                  <h3 class="card-title">{{$cmds}}
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Products</p>
                  <h3 class="card-title">{{$pds}}</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Messages</p>
                  <h3 class="card-title">{{$msgs}}</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-twitter"></i>
                  </div>
                  <p class="card-category">Categories</p>
                  <h3 class="card-title">{{$cats}}</h3>
                </div>
              </div>
            </div>
          </div>



<!--           <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-heading my-2">Chart Demo</div>
                    <div class="col-lg-8">
                                           
                  </div>
              </div>
          </div>
      </div>
  </div> -->



<div class="row mt-4">


<div class="col-lg-4 col-md-6 mt-4 mb-4">
<div class="card z-index-2 ">
<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
<div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
<div class="chart">
<canvas id="userChart" class="rounded shadow chart-canvas" height="170" style="display: block; box-sizing: border-box; height: 170px; width: 304px;"></canvas>
</div>
</div>
</div>
<div class="card-body">
<h6 class="mb-0 ">Food by Category</h6>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 mt-4 mb-4">
<div class="card z-index-2  ">
<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
<div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
<div class="chart">
<canvas id="userChart2" class="chart-canvas" height="170" style="display: block; box-sizing: border-box; height: 170px; width: 304px;" width="304"></canvas>
</div>
</div>
</div>
<div class="card-body">
<h6 class="mb-0 "> Daily Orders </h6>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6 mt-4 mb-4">
<div class="card z-index-2  ">
<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
<div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
<div class="chart">
<canvas id="userChart3" class="chart-canvas" height="170" style="display: block; box-sizing: border-box; height: 170px; width: 304px;" width="304"></canvas>
</div>
</div>
</div>
<div class="card-body">
<h6 class="mb-0 "> Daily Table Reservation </h6>
</div>
</div>
</div>




</div>

          <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<!-- CHARTS -->
<script>
    var ctx = document.getElementsByClassName('chart-canvas');
    console.log(ctx)

    for (var i = 0; i < ctx.length; i++){

  
    var chart = new Chart(ctx[i].getContext('2d'), {
        // The type of chart we want to create
        type: 'bar',
// The data for our dataset
        data: {
            labels:  {!!json_encode($chart->labels)!!} ,
            datasets: [
                {
                    label: '',
                    backgroundColor: {!! json_encode($chart->colours)!!} ,
                    data:  {!! json_encode($chart->dataset)!!} ,
                },
            ]
        },
// Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        callback: function(value) {if (value % 1 === 0) {return value;}}
                    },
                    scaleLabel: {
                        display: false
                    }
                }]
            },
            legend: {
                labels: {
                    // This more specific font property overrides the global property
                    fontColor: '#122C4B',
                    fontFamily: "'Muli', sans-serif",
                    padding: 25,
                    boxWidth: 25,
                    fontSize: 14,
                }
            },
            layout: {
                padding: {
                    left: 10,
                    right: 10,
                    top: 0,
                    bottom: 10
                }
            }
        }
    });
      };
</script>

@endsection 
