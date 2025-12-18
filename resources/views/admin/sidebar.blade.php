<nav id="sidebar">
    <!-- Sidebar Header -->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar">
            <img src="admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle">
        </div>
        <div class="title">
            <h1 class="h5">SaFa</h1>
            <p>Admin</p>
        </div>
    </div>

    <!-- Sidebar Navigation Menus -->
    <span class="heading">Main</span>

    <ul class="list-unstyled">
        <li class="{{ request()->is('/') ? 'active' : '' }}">
            <a href="{{ url('/') }}">
                <i class="icon-home"></i> Home
            </a>
        </li>

        <li class="{{ request()->is('create_room','view_room') ? 'active' : '' }}">
            <a href="#" 
               role="button"
               data-toggle="collapse"
               data-target="#exampledropdownDropdown"
               aria-controls="exampledropdownDropdown"
               aria-expanded="{{ request()->is('create_room','view_room') ? 'true' : 'false' }}">
                <i class="icon-windows"></i> Hotel Rooms
            </a>

            <ul id="exampledropdownDropdown"
                class="collapse list-unstyled {{ request()->is('create_room','view_room') ? 'show' : '' }}">
                <li>
                    <a href="{{ url('create_room') }}">Add Rooms</a>
                </li>
                <li>
                    <a href="{{ url('view_room') }}">View Rooms</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>