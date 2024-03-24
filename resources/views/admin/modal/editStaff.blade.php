<div class="modal fade" id="editStaffModal{{$staff->id}}" >
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Edit Staff</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('staff-lists.update', ['id' => $staff->id]) }}" method="POST">

          <div class="container mt-2">
            @method('PUT')
            @csrf

            <div class="mb-3">
              <label for="name">Name</label>
              <input type="text" class="form-control" value="{{$staff->name}}" placeholder="Enter Name" name="name">
            </div>

            <div class="mb-3">
              <label for="job_description">Job Description</label>
              <input type="text" class="form-control" name="job_description" value="{{$staff->job_description}}"/>
            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" value="{{$staff->email}}" placeholder="Enter Email" name="email">
              </div>

            <div class="row mb-3">
              
              <div class="col-sm-6">
                <label for="role_id">Role</label>
                <select class="form-select" id="role_id" name="roles_id" >
                    @foreach($roleList as $v_role)
                      <option value="{{ $v_role->id }}" {{ $v_role->id == $staff->roles_id ? 'selected' : '' }} >{{$v_role->role_name}}</option>
                    @endforeach
                </select>
              </div>

              <div class="col-sm-6">
                <label for="status">Status</label>
                <select class="form-select" name="status" >
                  <option value="Active" {{ $staff->status == 'Active' ? 'selected' : '' }} >Active</option>
                  <option  value="Inactive" {{ $staff->status == 'Inactive' ? 'selected' : '' }} >Inactive</option>
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
