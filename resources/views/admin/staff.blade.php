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
  <h1>Staff</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{'dashboard'}}">Dashboard</a></li>
      <li class="breadcrumb-item active">Staff </li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-header">
            <div class="card-toolbar">
                <button class="btn btn-info btn-sm" id="addmodal" data-bs-toggle="modal" data-bs-target="#addStaffModal" >Add Staff</button>
            </div>
        </div>
         @include('admin.modal.addStaff')
        <div class="card-body">
          @include('admin.alert')
          
          <h5 class="card-title">Staff List</h5>
          <p>Here is your Staff list, search for staff, view, hide and edit.</p>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Job Description</th>
                <th>Role</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            
            @foreach ($staffList as $staff)
              <tr>
                <td>{{$staff->name}}</td>
                <td>{{$staff->email}}</td>
                <td>{{$staff->job_description}}</td>
<<<<<<< HEAD
                <td>{{$staff->role_name}}</td>
=======
                <td>{{$staff->roles->role_name}}</td>
>>>>>>> d577e9b23819ab4633084d6f834798479e374ec2
                <td>
                  @if ($staff->status == 'Active')
                      <label class="badges bg-success">{{ $staff->status }}</label>
                  @else
                      <label class="badges bg-danger">{{ $staff->status }}</label>
                  @endif 
                </td>
                <td class="d-flex">
                  <a class="bi bi-pencil-square btn btn-info btn-sm me-2" data-bs-toggle="modal" data-bs-target="#editStaffModal{{$staff->id}}" ></a>
                  
                  <form id="delete-form-{{$staff->id}}" action="{{ route('menu-lists.delete', $staff->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm bi bi-trash" data-toggle="tooltip" title='Delete'></button>

                  </form>          
                </td>
              </tr>
               @include('admin.modal.editStaff')
            @endforeach
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->










</x-app-layout>