<!-- Modal -->
<div id="traymodal" class="modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ordering Tray</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Shopping cart content here -->
        <div class="container py-5">
@if (Session::has('cart'))

        @foreach (Session::get('cart') as $key => $value)
    <div class="card rounded-3 mb-4">
        <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
                @if (isset($value['product']))
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <h5 class="lead fw-normal mb-2">{{ $value['product'] }}</h5>
                        <p><span class="text-muted">{{ $value['description'] }}</span></p>
                    </div>
                @else
                    <div class="col-md-3 col-lg-3 col-xl-3">
                        <h5 class="lead fw-normal mb-2">Product Not Found</h5>
                    </div>
                @endif

                @if (isset($value['quantity']))
                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                    <input id="form1" min="1" name="quantity" value="{{ $value['quantity'] }}" type="number"
                           class="form-control form-control-sm" />
                </div>
                @else
                <h5 class="mb-0">Quantity Not Specified</h5>
                @endif

                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                    @if (isset($value['price']))
                        <h5 class="mb-0">&#8358 {{ $value['price'] }}</h5>
                    @else
                        <h5 class="mb-0">&#8358 Price Not Found</h5>
                    @endif
                </div>

                <form method="POST" action="{{ route('cart.delete', ['id' => $value['id']]) }}">
                    @csrf
                    @method('DELETE')
                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <button type="submit" class="text-danger"><i class="fas fa-trash fa-lg"></i></button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    
@endforeach
@endif



        <div class="card mb-4">
          <div class="card-body p-4 d-flex flex-row">
            <div class="form-outline flex-fill">
              <input type="text" id="form1" class="form-control form-control-lg" />
              <label class="form-label" for="form1">Table Number</label>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <button type="button" class="btn btn-warning btn-block btn-lg">Proceed to Pay</button>
          </div>
        </div>


          
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-10">
              <!-- Existing shopping cart content -->
              hello cart
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
