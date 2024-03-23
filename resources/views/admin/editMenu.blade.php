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

            <div class="mb-3">
              <label for="name">Name</label>
              <input type="text" class="form-control" value="{{$list->name}}" placeholder="Enter Name" name="name">
            </div>

            <div class="mb-3">
              <label for="description">Description</label>
              <textarea class="form-control" name="description">{{$list->description}}</textarea>
            </div>

            <div class="mb-3">
              <label for="amount">Amount</label>
              <input type="text" class="form-control" value="{{$list->amount}}" placeholder="Enter Name" name="amount">
            </div>

            

            <div class="mb-3">
              <label for="category_id">Category</label>
              <select class="form-select" id="category_id" name="category_id" >
              @foreach ($categoriesList as $cat_list)

                <option value="{{ $cat_list->id }}" {{ $cat_list->id == $list->category->id ? 'selected' : '' }} >{{ $cat_list->name }}</option>
              @endforeach

              </select>
            </div>

            <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" name="status" >
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
