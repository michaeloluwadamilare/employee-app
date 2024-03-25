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
      <h1>Order View</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{'dashboard'}}">Dashboard</a></li>
          <li class="breadcrumb-item active">Order View</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
      @endif
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Order</h5>
                {{$order}}
            </div>
          </div>

        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <h5 class="card-title">Order List</h5>


            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->



</x-app-layout>