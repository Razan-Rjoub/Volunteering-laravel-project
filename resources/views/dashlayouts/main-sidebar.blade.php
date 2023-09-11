<aside class="main-sidebar  elevation-4" style="background-color:#59886b ; color:white">
    <!-- Brand Logo -->
    {{-- <a href="index3.html" class="brand-link">
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
          <img src="{{ asset('assets/img/WhatsApp Image 2023-07-04 at 10.15.24 PM.jpeg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ asset('/admin') }}" class="d-block" style="color:white">Anfal dherat</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" >
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open" >
            <a href="#" class="nav-link active" style="background-color:black">

              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ asset('/dash') }}" class="nav-link active" style="background-color:black">

                  <h5 style="text-align:center">
                  home
                  </h5>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('/admin') }}" class="nav-link">
                  <i class="far fa-circle nav-icon" style="color:white"></i>
                  <p style="color:white">Admins</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('/user') }}" class="nav-link">
                  <i class="far fa-circle nav-icon" style="color:white"></i>
                  <p style="color:white">Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ asset('/category') }}" class="nav-link">
                  <i class="far fa-circle nav-icon" style="color:white"></i>
                  <p style="color:white">Categories</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ asset('/donatione') }}" class="nav-link">
              <i class="far fa-circle nav-icon" style="color:white"></i>
              <p style="color:white">Donations</p>
            </a>
          </li>


      <li class="nav-item">
        <a href="{{ asset('/donateditems') }}" class="nav-link">
          <i class="far fa-circle nav-icon" style="color:white"></i>
          <p style="color:white">Donated Items</p>
        </a>
      </li>

  <li class="nav-item">
    <a href="{{ asset('/donatedservives') }}" class="nav-link">
      <i class="far fa-circle nav-icon" style="color:white"></i>
      <p style="color:white">Donated Services</p>
    </a>

</li>
<li class="nav-item has-treeview menu-open">

    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="#" class="nav-link active" style="background-color:black">

          <h5 style="text-align:center">Form
          </h5>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ asset('/donationform') }}" class="nav-link">
          <i class="far fa-circle nav-icon" style="color:white"></i>
          <p style="color:white">Donation Form</p>
        </a>
      </li>

    </ul>
  </li>
  <li class="nav-item">
    <a href="{{ asset('/donationitemform') }}" class="nav-link">
      <i class="far fa-circle nav-icon" style="color:white"></i>
      <p style="color:white">Donated Items Form</p>
    </a>
  </li>




<li class="nav-item">
<a href="{{ asset('/donatedservicesform') }}" class="nav-link">
<i class="far fa-circle nav-icon" style="color:white"></i>
<p style="color:white">Donated Services form</p>
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
