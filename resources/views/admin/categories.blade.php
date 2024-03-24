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
  <h1>Categories</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{'dashboard'}}">Dashboard</a></li>
      <li class="breadcrumb-item active">Category List</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-header">
            <div class="card-toolbar">
                <button class="btn btn-info btn-sm" id="addmodal" data-bs-toggle="modal" data-bs-target="#addCategoryModal">Add Category</button>
            </div>
        </div>
        @include('admin.modal.addCategory')
        <div class="card-body">
          @include('admin.alert')

          <h5 class="card-title">Category List</h5>
          <p>Here is your Category list, search for Category, view, hide and edit.</p>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($categories as $v_category)
              <tr>
                <td>{{$v_category->name}}</td>
                <td>
                  @if ($v_category->status == 'Active')
                      <label class="badges bg-success">{{ $v_category->status }}</label>
                  @else
                      <label class="badges bg-danger">{{ $v_category->status }}</label>
                  @endif
                </td>
                <td class="d-flex">
                  <button class="bi bi-pencil-square btn btn-info btn-sm me-2" data-bs-toggle="modal" data-bs-target="#editCategoryModal{{$v_category->id}}"></button>
                  <form id="delete-form-{{$v_category->id}}" action="{{ route('category.delete', $v_category->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm bi bi-trash" data-toggle="tooltip" title='Delete'></button>

                  </form>  
                </td>
              </tr>
              @include('admin.modal.editCategory')
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