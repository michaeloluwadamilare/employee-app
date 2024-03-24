<div class="modal fade" id="viewOrderModal{{$order->id}}" >
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Order Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container mt-3">
          @foreach ($order['orderDetails'] as $orderlist)
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <p><b>{{ $orderlist->quantity }}x</b>  {{ $orderlist->product_name }}  <span class="float-end">&#8358;{{ number_format($orderlist->amount,2) }}</span></p>
                </div>

              </div>
            </div>
          @endforeach
          <div class="card">
            <div class="card-body">
              <div class="row">
                <p>Total Amount<b> <span class="float-end">&#8358;{{ number_format($order->total_amount,2) }}</span></b> </p>
              </div>

            </div>
          </div>

        </div>

      </div>

    </div>
  </div>
</div>
