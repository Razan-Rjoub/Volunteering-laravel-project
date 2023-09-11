<aside class="main-sidebar elevation-4" style="background-color:#59886b; color:black">
  <!-- Brand Logo -->
  <a href="{{ asset('/admin') }}" class="brand-link">
    <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
      <li class="nav-item has-treeview menu-open">
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ asset('/dash') }}" class="nav-link active" style="background-color:white;color:#59886b;text-align:center">
              Home
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ asset('/admin') }}" class="nav-link">
              <p style="color:white;text-align:center">Admins</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ asset('/user') }}" class="nav-link">
              <p style="color:white;text-align:center">Users</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ asset('/category') }}" class="nav-link">
              <p style="color:white;text-align:center">Categories</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="{{ asset('/donatione') }}" class="nav-link">
          <p style="color:white;text-align:center">Donations</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ asset('/donateditems') }}" class="nav-link">
          <p style="color:white;text-align:center">Items Donations</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ asset('/donatedservives') }}" class="nav-link">
          <p style="color:white;text-align:center">Services Donations</p>
        </a>
      </li>
      <li class="nav-item has-treeview menu-open">
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="#" class="nav-link active" style="background-color:white;color:#59886b;text-align:center">
              Forms
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ asset('/donationform') }}" class="nav-link">
              <p style="color:white;text-align:center">Donation Form</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="{{ asset('/donationitemform') }}" class="nav-link">
          <p style="color:white;text-align:center">Donated Items Form</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ asset('/donatedservicesform') }}" class="nav-link">
          <p style="color:white;text-align:center">Donated Services Form</p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</aside>
