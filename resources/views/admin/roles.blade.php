
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
  <h1>Roles</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{'dashboard'}}">Dashboard</a></li>
      <li class="breadcrumb-item active">Roles</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">

        <div class="card-body">
          @include('admin.alert')

          <h5 class="card-title">Roles</h5>
          

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>Role</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($roles as $v_role)
              <tr>
                <td>{{$v_role->role_name}}</td>
                <td>{{$v_role->role_description}}</td>              
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