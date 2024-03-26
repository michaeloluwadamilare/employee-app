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
  <h1>Order</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{'dashboard'}}">Dashboard</a></li>
      <li class="breadcrumb-item active">Order</li>
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
        <div class="card-header">
          <div class="card-title" style="color:black">Order </div>
        </div>
        <div class="card-body">

          <form>
            <div class="row">
              <div class="form-group col-md-6 mt-2">
                <label for="inputEmail4">Order Table</label>
                <input type="text" name="table_no" value="{{ $order->table_no }}" class="form-control">
              </div>

              <div class="form-group col-md-6 mt-2">
                <label for="inputPassword4">Status</label>
                <select name="status" class="form-select">
                  <option value="Paid" {{ $order->status == 'Paid' ? 'selected' : '' }} > Paid </option>
                  <option value="Unpaid" {{ $order->status == 'Unpaid' ? 'selected' : '' }} > Unpaid </option>
                </select>
              </div>

              <div class="form-group col-md-6 mt-2">
                <label>Amount</label>
                <input type="text" readonly value="{{ number_format($order->total_amount,2) }}" class="form-control">
              </div>

              <div class="form-group col-md-6 mt-2">
                <label>Order Date</label>
                <input type="text" readonly value="{{ $order->created_at }}" class="form-control">
              </div>

            </div>
            <button type="submit" class="btn btn-primary mt-2 float-end">Update</button>
          </form>

        </div>
      </div>

    </div>
  </div>


  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-header">
          <div class="card-title" style="color:black">Order Item Details</div>
        </div>
        <div class="card-body">

          @foreach ($order['orderDetails'] as $detail)
            <div class="card">
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="form-group col-md-6 mt-2">
                      <label for="inputEmail4">Item</label>
                      <input type="text" readonly name="product_name" value="{{ $detail->product_name }}" class="form-control">
                    </div>

                    <div class="form-group col-md-6 mt-2">
                      <label for="inputEmail4">Quantity</label>
                      <input type="number" name="quantity" value="{{ $detail->quantity }}" class="form-control">
                    </div>

                    <div class="form-group col-md-6 mt-2">
                      <label for="inputPassword4">Status</label>
                      <select name="status" class="form-select">
                        <option value="Pending" {{ $detail->status == 'Pending' ? 'selected' : '' }} > Pending </option>
                        <option value="Completed" {{ $detail->status == 'Completed' ? 'selected' : '' }} > Completed </option>
                      </select>
                    </div>

                    <div class="form-group col-md-6 mt-2">
                      <label>Amount</label>
                      <input type="text" readonly value="{{ number_format($detail->amount,2) }}" class="form-control">
                    </div>

                    <div class="form-group col-md-6 mt-2">
                      <label>Order Date</label>
                      <input type="text" readonly value="{{ $order->created_at }}" class="form-control">
                    </div>

                  </div>
                  <button type="submit" class="btn btn-primary btn-sm mt-2 float-end">Update</button>
                </form>
                @if($order->status == 'Unpaid' && $detail->status == 'Pending' )
                <form id="delete-form-{{$detail->id}}" action="{{ route('order.delete', $detail->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm me-2 mt-2 btn-danger btn-flat show-alert-delete-box float-end" data-toggle="tooltip" title='Delete'>Delete</button>

                </form> 
                @endif
              </div>
            </div>
          @endforeach

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->










</x-app-layout>