<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="index3.html" class="brand-link">
      <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/img/AdminLTELogo.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Anfal dherat</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ asset('/table') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admins
                </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('/user') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('/Categories') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ asset('/donation') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Donations</p>
            </a>
          </li>


      <li class="nav-item">
        <a href="{{ asset('/donateditems') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Donated Items</p>
        </a>
      </li>

  <li class="nav-item">
    <a href="{{ asset('/donatedservives') }}" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
      <p>Donated Services</p>
    </a>

</li>
<li class="nav-item has-treeview menu-open">

    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="#" class="nav-link active">
          <i class="far fa-circle nav-icon"></i>
          <p>Form
        </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ asset('/donationform') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Donation Form</p>
        </a>
      </li>

    </ul>
  </li>
  <li class="nav-item">
    <a href="{{ asset('/donateditemsform') }}" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
      <p>Donated Items Form</p>
    </a>
  </li>




<li class="nav-item">
<a href="{{ asset('/donatedservices') }}" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Donated Services</p>
</a>

</li>
</ul>
</li>



          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
