<div class="modal fade" id="editMenuModal{{$list->id}}" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Edit Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">



      <div class="container mt-3">
        <form action="{{ route('menu-lists.update', ['id' => $list->id]) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3 mt-3">
              <label for="id">ID:</label>
              <input type="number" class="form-control" value="{{$list->id}}" id="id" name="id">
            </div>

            <div class="mb-3">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" value="{{$list->name}}" placeholder="Enter Name" name="name">
            </div>

            <div class="mb-3">
              <label for="description">Description:</label>
              <input type="text" class="form-control" id="description" value="{{$list->description}}" placeholder="Enter Name" name="description">
            </div>

            <div class="mb-3">
              <label for="amount">amount:</label>
              <input type="text" class="form-control" id="amount" value="{{$list->amount}}" placeholder="Enter Name" name="amount">
            </div>

            

            <div class="mb-3">
              <label for="category_id">Category:</label>
              <input type="text" class="form-control" id="category_id" value="{{$list->category->id}}" placeholder="Enter Name" name="category_id">
            </div>

            <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" >
              <option value="Active" {{ $list->status == 'Active' ? 'selected' : '' }} >Active</option>
              <option  value="Inactive"  {{ $list->status == 'Inactive' ? 'selected' : ''}}>Inactive</option>

            </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
         </form>
        </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- Additional buttons if needed -->
      </div>
    </div>
  </div>
</div>
