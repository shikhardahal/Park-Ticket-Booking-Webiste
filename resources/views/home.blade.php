@php
$yearlyRevenue = DB::table('booking')->whereYear('created_at', \Carbon\Carbon::now()->year)->sum('price');
// $yearlyTax = DB::table('booking')->whereYear('created_at', \Carbon\Carbon::now()->year)->sum('tax');
$yearlyPawanMedia = DB::table('booking')->whereYear('created_at', \Carbon\Carbon::now()->year)->sum('pawanmedia');
$yearlyNagarpalikaTax = DB::table('booking')->whereYear('created_at', \Carbon\Carbon::now()->year)->sum('taxngarpalika');
$yearlyPark = DB::table('booking')->whereYear('created_at', \Carbon\Carbon::now()->year)->sum('park');

$monthlyRevenue = DB::table('booking')->whereMonth('created_at', \Carbon\Carbon::now()->month)->sum('price');
// $monthlyTax = DB::table('booking')->whereMonth('created_at', \Carbon\Carbon::now()->month)->sum('tax');
$monthlyPawanMedia = DB::table('booking')->whereMonth('created_at', \Carbon\Carbon::now()->month)->sum('pawanmedia');
$monthlyNagarpalikaTax = DB::table('booking')->whereMonth('created_at', \Carbon\Carbon::now()->month)->sum('taxngarpalika');
$monthlyPark = DB::table('booking')->whereMonth('created_at', \Carbon\Carbon::now()->month)->sum('park');

$totalRevenue = DB::table('booking')->sum('price');
// $totalTax = DB::table('booking')->sum('tax');
$totalPawanMedia = DB::table('booking')->sum('pawanmedia');
$totalNagarpalikaTax = DB::table('booking')->sum('taxngarpalika');
$totalPark = DB::table('booking')->sum('park');

// Weekly revenue calculation
$startOfWeek = now()->startOfWeek(Carbon\Carbon::SUNDAY)->subSecond(); // Set start of week to Sunday 00:00:00
$endOfWeek = now()->endOfWeek(Carbon\Carbon::SATURDAY)->subSecond(); // Set end of week to Saturday 23:59:59
$weeklyRevenue = DB::table('booking')
                    ->whereBetween('created_at', [$startOfWeek, $endOfWeek])
                    ->select(DB::raw('SUM(price) AS total'))
                    ->value('total');
// $weeklyTax = DB::table('booking')
//                 ->whereBetween('created_at', [$startOfWeek, $endOfWeek])
//                 ->select(DB::raw('SUM(tax) AS total'))
//                 ->value('total');
$weeklyPawanMedia = DB::table('booking')
                        ->whereBetween('created_at', [$startOfWeek, $endOfWeek])
                        ->select(DB::raw('SUM(pawanmedia) AS total'))
                        ->value('total');
$weeklyNagarpalikaTax = DB::table('booking')
                        ->whereBetween('created_at', [$startOfWeek, $endOfWeek])
                        ->select(DB::raw('SUM(taxngarpalika) AS total'))
                        ->value('total');
$weeklyPark = DB::table('booking')
                    ->whereBetween('created_at', [$startOfWeek, $endOfWeek])
                    ->select(DB::raw('SUM(park) AS total'))
                    ->value('total');

$dailyRevenue = DB::table('booking')->whereDate('created_at', \Carbon\Carbon::today())->sum('price');
// $dailyTax = DB::table('booking')->whereDate('created_at', \Carbon\Carbon::today())->sum('tax');
$dailyPawanMedia = DB::table('booking')->whereDate('created_at', \Carbon\Carbon::today())->sum('pawanmedia');
$dailyNagarpalikaTax = DB::table('booking')->whereDate('created_at', \Carbon\Carbon::today())->sum('taxngarpalika');
$dailyPark = DB::table('booking')->whereDate('created_at', \Carbon\Carbon::today())->sum('park');

$dailyTicketsBooked = DB::table('booking')->whereDate('created_at', \Carbon\Carbon::today())->count();

$startOfWeek = now()->startOfWeek(Carbon\Carbon::SUNDAY)->subSecond(); // Set start of week to Sunday 00:00:00
$endOfWeek = now()->endOfWeek(Carbon\Carbon::SATURDAY)->subSecond(); // Set end of week to Saturday 23:59:59
$weeklyTicketsBooked = DB::table('booking')
    ->whereBetween('created_at', [$startOfWeek, $endOfWeek])
    ->count();

$monthlyTicketsBooked = DB::table('booking')->whereMonth('created_at', \Carbon\Carbon::now()->month)->count();

$yearlyTicketsBooked = DB::table('booking')->whereYear('created_at', \Carbon\Carbon::now()->year)->count();



@endphp
@extends('admin.layout.main')

@section('main-container')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          @php
              use Illuminate\Support\Facades\Session;
              $data = [];
              if(Session::has('id')){
                  $data =  DB::table('users')->where('id', Session::get('id'))->first();
              }
          @endphp

        @if ($data && ($data->role == 'admin'))
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              @php
              $user_count_query = DB::table('users')->where('role' , 'user')->get();
              $user_count = count($user_count_query);
              @endphp
              <p>No of Users</p>
              <h3>{{ $user_count }}</h3>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="/show_user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              @php
              $admin_count_query = DB::table('users')->where('role' , 'admin')->get();
              $admin_count = count($admin_count_query);
              @endphp
              <p>No of Admin</p>
              <h3>{{ $admin_count }}</h3>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/show_user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                @php
                $staff_count_query = DB::table('users')->where('role' , 'staff')->get();
                $staff_count = count($staff_count_query);
                @endphp
                <p>No of Staff</p>
                <h3>{{ $staff_count }}</h3>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/show_user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              @php
              $booking_count_query = DB::table('booking')->get();
              $booking_count = count($booking_count_query);
              @endphp
              <p>Total no. of Booked Tickets</p>
              <h3>{{ $booking_count }}</h3>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <p>Weekly no. of Tickets Booked</p>
                <h3>{{ $weeklyTicketsBooked }}</h3>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <p>Monthly no. of Tickets Booked</p>
                <h3>{{ $monthlyTicketsBooked }}</h3>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <p>Yearly no. of Tickets Booked</p>
                <h3>{{ $yearlyTicketsBooked }}</h3>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
      </div>
      <h3>Overall</h3>
      <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                  <div class="inner">
                    <p>Overall Revenue</p>

                    <h3>{{ $totalRevenue }}</h3>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                  <div class="inner">
                    <p>Overall Tax</p>

                    <h3>{{ $totalTax }}</h3>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div> --}}
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                  <div class="inner">
                    <p>Overall Pawan Media Revenue</p>

                    <h3>{{ $totalPawanMedia }}</h3>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                  <div class="inner">
                    <p>Overall Nagarpalika Tax</p>
                    <h3>{{ $totalNagarpalikaTax}}</h3>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <p>Overall Park Revenue</p>
                        <h3>{{ $totalPark}}</h3>
                    </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
      <h3>Yearly</h3>
      <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                  <div class="inner">
                    <p>Yearly Revenue</p>

                    <h3>{{ $yearlyRevenue }}</h3>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                  <div class="inner">
                    <p>Yearly Tax</p>

                    <h3>{{ $yearlyTax }}</h3>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div> --}}
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                  <div class="inner">
                    <p>Yearly Pawan Media Revenue</p>

                    <h3>{{ $yearlyPawanMedia }}</h3>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                  <div class="inner">
                    <p>Yearly Nagarpalika Tax</p>
                    <h3>{{ $yearlyNagarpalikaTax}}</h3>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <p>Yearly Park Revenue</p>
                        <h3>{{ $yearlyPark}}</h3>
                    </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
      <h3>Monthly</h3>
      <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                  <div class="inner">
                    <p>Monthly Revenue</p>

                    <h3>{{ $monthlyRevenue }}</h3>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                  <div class="inner">
                    <p>Monthly Tax</p>

                    <h3>{{ $monthlyTax }}</h3>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div> --}}
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                  <div class="inner">
                    <p>Monthly Pawan Media Revenue</p>

                    <h3>{{ $monthlyPawanMedia }}</h3>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                  <div class="inner">
                    <p>Monthly Nagarpalika Tax</p>
                    <h3>{{ $monthlyNagarpalikaTax}}</h3>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <p>Monthly Park Revenue</p>
                        <h3>{{ $monthlyPark}}</h3>
                    </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
      <h3>Weekly</h3>

      <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                  <div class="inner">
                    <p>Weekly Revenue</p>

                    <h3>{{ $weeklyRevenue }}</h3>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                  <div class="inner">
                    <p>Weekly Tax</p>

                    <h3>{{ $weeklyTax }}</h3>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div> --}}
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                  <div class="inner">
                    <p>Weekly Pawan Media Revenue</p>

                    <h3>{{ $weeklyPawanMedia }}</h3>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                  <div class="inner">
                    <p>Weekly Nagarpalika Tax</p>
                    <h3>{{ $weeklyNagarpalikaTax}}</h3>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <p>Weekly Park Revenue</p>
                        <h3>{{ $weeklyPark}}</h3>
                    </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

      <h3>Daily</h3>
      @endif
      <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-primary">
                  <div class="inner">
                    <p>Daily Revenue</p>

                    <h3>{{ $dailyRevenue }}</h3>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-6">
                <div class="small-box bg-primary">
                  <div class="inner">
                    <p>Daily Tax</p>

                    <h3>{{ $dailyTax }}</h3>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div> --}}
            <div class="col-lg-3 col-6">
                <div class="small-box bg-primary">
                  <div class="inner">
                    <p>Daily Pawan Media Revenue</p>

                    <h3>{{ $dailyPawanMedia }}</h3>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-primary">
                  <div class="inner">
                    <p>Daily Nagarpalika Tax</p>
                    <h3>{{ $dailyNagarpalikaTax}}</h3>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <p>Daily Park Revenue</p>
                        <h3>{{ $dailyPark}}</h3>
                    </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <p>Daily no. of Tickets Booked</p>
                        <h3>{{ $dailyTicketsBooked }}</h3>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="/show_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>





        <!-- ./col -->
      <!-- /.row -->
      <!-- Main row -->

      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <!-- Update footer content if necessary -->
</footer>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@endsection
