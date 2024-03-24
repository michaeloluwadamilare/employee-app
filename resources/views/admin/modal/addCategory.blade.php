<div class="modal fade" id="addCategoryModal" >
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Add Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('category.store') }}" method="POST">
          @csrf
          <div class="container mt-3">

            <div class="mb-3">
              <label for="name">Name</label>
              <input type="text" class="form-control" value="" id="name" placeholder="Enter Name" name="name">
            </div>

            <div class="mb-3">
              <label for="status" class="form-label">Status</label>
              <select class="form-select" id="status" name="status" >
                <option value="Active" >Active</option>
                <option  value="Inactive">Inactive</option>

              </select>
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
