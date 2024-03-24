<div class="modal fade" id="addMenuModal" >
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Add Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('menu-lists.store') }}" method="POST">

          <div class="container mt-2">
            @csrf

            <div class="mb-3">
              <label for="name">Name</label>
              <input type="text" class="form-control" value="" placeholder="Enter Name" name="name">
            </div>

            <div class="mb-3">
              <label for="description">Description</label>
              <textarea class="form-control" name="description"></textarea>
            </div>
            <div class="row mb-3">
              <div class="col-sm-4">
                <label for="amount">Amount</label>
                <input type="text" class="form-control" value="" placeholder="Enter Name" name="amount">
              </div>

              <div class="col-sm-4">
                <label for="category_id">Category</label>
                <select class="form-select" id="category_id" name="category_id" >
                @foreach ($categoriesList as $cat_list)
                  <option value="{{ $cat_list->id }}">{{ $cat_list->name }}</option>
                @endforeach

                </select>
              </div>

              <div class="col-sm-4">
                <label for="status">Status</label>
                <select class="form-select" name="status" >
                  <option value="Active">Active</option>
                  <option  value="Inactive">Inactive</option>
                </select>
              </div>

            </div>
          </div>
            
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
