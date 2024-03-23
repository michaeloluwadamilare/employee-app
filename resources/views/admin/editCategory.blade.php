<div class="modal fade" id="editCategoryModal{{$v_category->id}}" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Edit Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">



      <div class="container mt-3">
        <form action="/action_page.php" method="POST">
            <!-- <div class="mb-3 mt-3">
              <label for="id">ID:</label>
              <input type="number" class="form-control" id="id" name="id">
            </div> -->

            <div class="mb-3">
              <label for="name">Name:</label>
              <input type="text" class="form-control" value="{{$v_category->name}}" id="name" placeholder="Enter Name" name="name">
            </div>

            <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" >
              <option value="Active" {{ $v_category->status == 'Active' ? 'selected' : '' }} >Active</option>
              <option  value="Inactive"  {{ $v_category->status == 'Inactive' ? 'selected' : ''}}>Inactive</option>

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


   

</script>