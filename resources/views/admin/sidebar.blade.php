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
        <li class="{{ request()->is('create_room') ? 'active' : '' }}">
            <a href="{{ url('create_room') }}">
                <i class="icon-windows"></i> Add Room
            </a>
        </li>
        <li class="{{ request()->is('view_room') ? 'active' : '' }}">
            <a href="{{ url('view_room') }}">
                <i class="icon-windows"></i> View Rooms
            </a>
        </li>
        <li class="{{ request()->is('bookings') ? 'active' : '' }}">
            <a href="{{ url('bookings') }}">
                <i class="icon-grid"></i> Bookings
            </a>
        </li>

        <li class="{{ request()->is('gallary') ? 'active' : '' }}">
            <a href="{{ url('view_gallary') }}">
                <i class="icon-grid"></i> Gallary
            </a>
        </li>

        <!-- messages -->
        <li class="{{ request()->is('messages') ? 'active' : '' }}">
            <a href="{{ url('all_messages') }}">
                <i class="icon-grid"></i> Messages
            </a>
        </li>

    </ul>
</nav>