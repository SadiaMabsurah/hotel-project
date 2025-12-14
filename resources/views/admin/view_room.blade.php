<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
</head>
<body>

@include('admin.header')

<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation -->
    @include('admin.sidebar')
    <!-- Sidebar Navigation end -->

    <!-- Page Content -->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-header">
                        <h3 class="h5 mb-0">Room List</h3>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Room Title</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Wifi</th>
                                        <th>Room Type</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse($data as $room)
                                    <tr>
                                        <td>{{ $room->room_title }}</td>
                                        <td>{{ $room->description }}</td>
                                        <td>{{ $room->price }}$</td>
                                        <td>{{ $room->wifi }}</td>
                                        <td>{{ $room->room_type }}</td>
                                        <td>
                                            <img src="{{ asset('room/'.$room->image) }}"
                                                 style="width:80px; height:60px; object-fit:cover;">
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center">
                                            No rooms found
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@include('admin.footer')

</body>
</html>
