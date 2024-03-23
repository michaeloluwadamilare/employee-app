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
  <h1>Menu</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{'dashboard'}}">Dashboard</a></li>
      <li class="breadcrumb-item active">Menu List</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-header">
            <div class="card-toolbar">
                <button class="btn btn-info bi bi-plus btn-sm">Add Menu</button>
            </div>
        </div>
        <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
          <h5 class="card-title">Menu List</h5>
          <p>Here is your menu list, search for menu, view, hide and edit.</p>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            
            @foreach ($menuLists as $list)
              <tr>
                <td>{{$list->name}}</td>
                <td>{{$list->description}}</td>
                <td>{{$list->amount}}</td>
                <td>{{$list->category->name}}</td>
                <td>
                  @if ($list->status == 'Active')
                      <label class="badge bg-success">{{ $list->status }}</label>
                  @else
                      <label class="badge bg-danger">{{ $list->status }}</label>
                  @endif
                </td>
                <td>
                  <a href="" class="bi bi-pencil-square btn btn-info btn-sm"></a>
                  <a href="{{ route('menu-lists.delete', $list->id) }}" class="bi bi-trash btn btn-danger btn-sm" onclick="event.preventDefault(); if(confirm('This action is irreversible. Are you sure you want to delete {{$list->name}}?')) { document.getElementById('delete-form-{{$list->id}}').submit(); }"></a>
                  <form id="delete-form-{{$list->id}}" action="{{ route('menu-lists.delete', $list->id) }}" method="POST" style="display: none;">
                      @csrf
                      @method('DELETE')
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