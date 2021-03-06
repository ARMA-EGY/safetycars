@extends('layouts.admin')

@section('content')

    <!-- Header -->
    <div class="header bg-gradient-primary pb-6">
        <div class="container-fluid">
          <div class="header-body">
            <div class="row align-items-center py-4">
              <div class="col-lg-6 col-7">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboards</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                  </ol>
                </nav>
              </div>
            </div>
            <!-- Card stats -->
            <div class="row justify-content-center">

              <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Traffic</h5>
                        <span class="h2 font-weight-bold mb-0">{{number_format($traffic)}}</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                          <i class="ni ni-sound-wave"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Categories</h5>
                        <span class="h2 font-weight-bold mb-0">{{number_format($category_count)}}</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                          <i class="ni ni-chart-pie-35"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Posts</h5>
                        <span class="h2 font-weight-bold mb-0">{{number_format($blogs_count)}}</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                          <i class="ni ni-single-copy-04"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Tags</h5>
                        <span class="h2 font-weight-bold mb-0">{{number_format($tags_count)}}</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                          <i class="fa fa-tags"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Drafts</h5>
                        <span class="h2 font-weight-bold mb-0">{{number_format($drafts_count)}}</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-pink text-white rounded-circle shadow">
                          <i class="fa fa-paste"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Members</h5>
                        <span class="h2 font-weight-bold mb-0">{{number_format($members_count)}}</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-light text-white rounded-circle shadow">
                          <i class="fa fa-users"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Messages</h5>
                        <span class="h2 font-weight-bold mb-0">{{number_format($messages_count)}}</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                          <i class="ni ni-email-83"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                    </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row justify-content-center">

        <!-- First Half -->
        <div class="col-xl-6">

            <!-- No.Posts in each category -->
            <div class="card bg-default shadow">
              <div class="card-header bg-transparent">
                <div class="row align-items-center">
                  <div class="col">
                    <h6 class="text-uppercase text-muted ls-1 mb-1">Categories</h6>
                    <h5 class="h3 mb-0 text-white">Number of Posts in each category</h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <!-- Chart -->
                <div class="chart">
                  <canvas id="chart-pie" class="chart-canvas"></canvas>
                </div>
              </div>
            </div>

        </div>

        <!-- Second Half -->
        <div class="col-xl-6">

            <!-- No.Posts for each author -->
            <div class="card bg-default shadow">
              <div class="card-header bg-transparent">
                <div class="row align-items-center">
                  <div class="col">
                    <h6 class="text-uppercase text-muted ls-1 mb-1">Authors</h6>
                    <h5 class="h3 mb-0 text-white">Number of Posts for each author</h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <!-- Chart -->
                <div class="chart">
                  <canvas id="chart-bars" class="chart-canvas"></canvas>
                </div>
              </div>
            </div>

        </div>

        <!-- Full Width -->
        <div class="col-12">

            <!-- Latest Posts -->
            <div class="card bg-default shadow">
              <div class="card-header bg-transparent border-0">
                <div class="row align-items-center">
                  <div class="col">
                    <h3 class="text-white mb-0">Latest Posts</h3>
                  </div>
                </div>
              </div>
              <div class="table-responsive">
                <!-- table -->
                <table class="table align-items-center table-dark table-flush">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Title</th>
                      <th scope="col">Category</th>
                      <th scope="col">Views</th>
                    </tr>
                  </thead>
                  <tbody class="list">

                    @foreach ($latest_posts as $latest_post)

                    <tr class="parent">
                      <td>{{ $loop->iteration }}</td>
                      <td>
                      {{  $latest_post->title }} 
                      </td>
                      <td>
                        <span class="badge badge-default category-badge">{{$latest_post->category->name }}</span>
                      </td>
                      <td>
                        <span >{{ number_format($latest_post->visits->sum('views')) }}</span>
                      </td>
                    </tr>

                    @endforeach
                  
                    
                  </tbody>
                </table>
              </div>
              <div class="card-footer bg-dark py-4">
              </div>
            </div>

            <!-- Top Posts -->
            <div class="card bg-default shadow">
              <div class="card-header bg-transparent border-0">
                <div class="row align-items-center">
                  <div class="col">
                    <h3 class="text-white mb-0">Top Posts</h3>
                  </div>
                </div>
                
              </div>
              <div class="table-responsive">
                <table class="table align-items-center table-dark table-flush">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col" class="sort" >Title</th>
                      <th scope="col" class="sort" >Category</th>
                      <th scope="col" class="sort" >Views</th>
                    </tr>
                  </thead>
                  <tbody class="list">

                    @foreach ($top_posts as $top_post)

                      <tr class="parent">
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <div class="media-body">
                              <span class="name mb-0 text-sm">{{$top_post->title}}</span>
                            </div>
                        </td>
                        <td><span class="badge badge-default category-badge">{{ $top_post->category->name }}</span></td>
                        <td><span >{{ number_format($top_post->views) }}</span></td>
                      </tr>
                          
                    @endforeach

                  </tbody>
                </table>
              </div>
              <div class="card-footer bg-dark py-4">
              </div>
            </div>

        </div>

      </div>
      
      
      <!-- Footer -->
      <footer class="footer pt-0">
      </footer>
    </div>

@endsection


@section('script')
    
<script>

  // Bars chart
  var BarsChart = (function() {

    var $chart = $('#chart-bars');

    // Init chart
    function initChart($chart) {

      // Create chart
      var ordersChart = new Chart($chart, {
        type: 'bar',
        data: {
          labels: {!! json_encode($author_name)!!},
          datasets: [{
            label: 'Posts',
            data: {!! json_encode($author_posts)!!}
          }]
        }
      });

      // Save to jQuery object
      $chart.data('chart', ordersChart);
    }

    // Init chart
    if ($chart.length) {
      initChart($chart);
    }
  })();

  // Pie chart
  PieChart = function(){
    var e,a,t,n = $("#chart-pie");
    n.length&&(e=n, a = function(){return Math.round(100*Math.random())},
    t = new Chart(e,{
      type:"pie",
      data: {
        labels:{!! json_encode($category_name)!!},
        datasets:[{
            data:{!! json_encode($category_posts)!!},
            backgroundColor:[Charts.colors.theme.danger,Charts.colors.theme.warning,Charts.colors.theme.success,Charts.colors.theme.primary,Charts.colors.theme.info]
            ,label:"Dataset 1"
            }]
            },
        options:{responsive:!0,legend:{position:"top"},
        animation:{animateScale:!0,animateRotate:!0}}}),
        e.data("chart",t)
        )
  }();

</script>

@endsection