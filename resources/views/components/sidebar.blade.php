  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{'dashboard'}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Staff & Roles</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{'role'}}">
              <i class="bi bi-circle"></i><span>Roles</span>
            </a>
          </li>
          <li>
            <a href="{{'employee'}}">
              <i class="bi bi-circle"></i><span>Employee</span>
            </a>
          </li>
          
        </ul>
      </li>
      
    </ul>

  </aside>