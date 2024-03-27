<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Employee MGT') }}
        </h2>
    </x-slot>

    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <x-sidebar />
        </ul>
    </aside>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Employees</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{'dashboard'}}">Dashboard</a></li>
      <li class="breadcrumb-item active">Employee List</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

          <h5 class="card-title">Order List</h5>
          <p>Here is your order list, search for order, view, hide and edit.</p>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($employees as $employee)
                <tr>
                  <td>{{ $employee->name }}</td>
                  <td>{{ $employee->email }}</td>  
                  <td>{{ $employee->role->name }}</td>
                  <td>
                      @if ($employee->status == 'Employed')
                          <label class="badge bg-success">{{ $employee->status }}</label>
                      @else
                          <label class="badge bg-danger">{{ $employee->status }}</label>
                      @endif
                  </td>
                  <td class="d-flex">
                    <button class="bi bi-eye btn btn-primary me-2 btn-sm" id="modalo" data-bs-toggle="modal" data-bs-target="#viewOrderModal{{$employee->id}}"></button>
                      <form action="" method="POST">
                        @csrf
                        <input type="hidden" value="{{$employee->id}}" name="id" />
                        <button type="submit" class="bi bi-pencil-square me-2 btn btn-info btn-sm"></a>
                      </form>

                    <form id="delete-form-{{$employee->id}}" action="{{ route('employee-lists.destroy', $employee->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm bi bi-trash" data-toggle="tooltip" title='Delete'></button>

                    </form> 
                  </td>
                </tr>

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