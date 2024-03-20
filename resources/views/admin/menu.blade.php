use Illuminate\Support\Str;

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
  <h1>Data Tables</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Menu List</h5>
          <p>Here is your menu list, search for menu, view, hide and edit.</p>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>
                  <b>N</b>ame
                </th>
                <th>Description</th>
                <th>Status</th>
                <th>Amount</th>
                <th>Category</th>
              </tr>
            </thead>
            <tbody>
            
            @foreach ($menuLists as $MenuList)
              <tr>
                <td>{{$MenuList->name}}</td>
                <td>{{$MenuList->description}}</td>
                <td>{{$MenuList->status}}</td>
                <td>{{$MenuList->amount}}</td>
                <td>{{$MenuList->category_id}}</td>
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