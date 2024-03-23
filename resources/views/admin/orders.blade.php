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
  <h1>Orders</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{'dashboard'}}">Dashboard</a></li>
      <li class="breadcrumb-item active">Order List</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

          <h5 class="card-title">Order List</h5>
          <p>Here is your order list, search for order, view, hide and edit.</p>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>Order Table</th>
                <th>Amount</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($orders as $order)
              <tr>
                <td>{{ $order->table_no }}</td>
                <td>{{ $order->total_amount }}</td>  
                <td>{{ $order->created_at }}</td>
                <td>
                    @if ($order->status == 'Paid')
                        <label class="badge bg-success">{{ $order->status }}</label>
                    @elseif( $order->status == 'Unpaid')
                        <label class="badge bg-warning">{{ $order->status }}</label>
                    @else
                        <label class="badge bg-danger">{{ $order->status }}</label>
                    @endif
                </td>
                <td>
                  <a href="" class="bi bi-pencil-square btn btn-info btn-sm"></a>
                  <a href="{{ route('menu-lists.delete', $order->id) }}" class="bi bi-trash btn btn-danger btn-sm" onclick="event.preventDefault(); if(confirm('This action is irreversible. Are you sure you want to delete {{$order->name}} category?')) { document.getElementById('delete-form-{{$order->id}}').submit(); }"></a>
                  <form id="delete-form-{{$order->id}}" action="{{ route('order.delete', $order->id) }}" method="POST" style="display: none;">
                      @csrf
                      @method('DELETE')
                  </form>
                </td>
              </tr>
            @endforeach

            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->










</x-app-layout>