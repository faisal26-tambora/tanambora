<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tv"></i>
              <p>
                Booking Online
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('booking/index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrasi</p>
                </a>
              </li>
               <!--
              <li class="nav-item">
                <a href="{{ url('booking/index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>index</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('booking/ualng') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ulang</p>
                </a>
              </li>
              -->
            </ul>
             
          </li>


       
          <li class="nav-item">
            <a href="{{ url('/logout') }}" class="nav-link">
           <i class="nav-icon fas fa-solid fa-arrow-right"></i>
              <p>
              Logout
              </p>
            </a>
            </a>
          </li>


        </ul>
      </nav>