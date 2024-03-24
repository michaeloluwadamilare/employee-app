<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mint Bar and Resturant') }}
        </h2>
    </x-slot>
    
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">

    <x-sidebar />

  </ul>
</aside>

<main id="main" class="main">

<div class="pagetitle">
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-8">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">

            <div class="filters" >
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Sales <span>| Today</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-cart"></i>
                </div>
                <div class="ps-3">
                  <h6>145</h6>
                  <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">

            <div class="filters">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Revenue <span>| This Month</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-currency-dollar"></i>
                </div>
                <div class="ps-3">
                  <h6>$3,264</h6>
                  <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-xxl-4 col-xl-12">

          <div class="card info-card customers-card">

            <div class="filters">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Customers <span>| This Year</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6>1244</h6>
                  <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                </div>
              </div>

            </div>
          </div>

        </div><!-- End Customers Card -->
      
      </div>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
        
        <div class="card">
        <div class="card-body">
          <h5 class="card-title">Recent Order Rquest</h5>

          <table class="table datatable">

          <thead >
              <tr>
                <th>Table Number</th>
                <th>Description</th>
                <th>Total Amount</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
            @foreach ($orders as $order)
              <tr>
              <td>{{ $order->table_no }}</td>
              <td>
                  @foreach ($order['orderDetails'] as $detail)
                        <p>{{ $detail->quantity }} - {{ $detail->product_name }},</p>
                    @endforeach
              </td>
              <td>&#8358 {{ $order->total_amount }}</td>
              <td>
                  @if ($order->status == 'Paid')
                      <label class="badges bg-success">{{ $order->status }}</label>
                  @elseif ($order->status == 'Abandoned')
                      <label class="badges bg-danger">{{ $order->status }}</label>
                  @else
                      <label class="badges bg-info">{{ $order->status }}</label>
                  @endif
              </td>
              <td>
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Accepted</a></li>
                      <li><a class="dropdown-item" href="#">Declined</a></li>
                      <li><a class="dropdown-item" href="#">Canceled</a></li>
                    </ul>
                  </div>
              </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        </div>
        </div>
      </div>
    </section>
  

      </div><!-- End Row class Left side columns -->

    </div>
  </div>
</section>

</main><!-- End #main -->


</x-app-layout>
