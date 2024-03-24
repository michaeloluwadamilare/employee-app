<div class="modal fade" id="addStaffModal" >
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >New Staff</h5>
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
              <label for="job_description">Job Description</label>
              <input type="text" class="form-control" name="job_description"/>
              <input type="hidden" class="form-control" name="password"/>

            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" value="" placeholder="Enter Email" name="email">
              </div>

            <div class="row mb-3">
              

              <div class="col-sm-6">
                <label for="role_id">Role</label>
                <select class="form-select" id="role_id" name="role_id" >
                    @foreach($roleList as $v_role)
                      <option value="{{ $v_role->id }}">{{$v_role->role_name}}</option>
                    @endforeach
                </select>
              </div>

              <div class="col-sm-6">
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
