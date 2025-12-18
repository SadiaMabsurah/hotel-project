<!DOCTYPE html>
<html>
<head>

    @include('admin.css')

    <style></style>
</head>
<body>

@include('admin.header')

<div class="d-flex align-items-stretch">
    @include('admin.sidebar')

    <div class="page-content w-100">
        <div class="container-fluid">

            <div class="card mt-4">
                <div class="card-header bg-primary text-white">
                    <h3 class="h5 mb-0">Room List</h3>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center">
                            <thead class="table-light">
                                <tr>
                                    <th>Room Title</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Wifi</th>
                                    <th>Room Type</th>
                                    <th>Image</th>
                                    <th>Update</th>
                                    <th>Delete</th>
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
                                             style="width:80px; height:60px; object-fit:cover; border-radius:5px;">
                                    </td>

                                    <td>
                                        <a href="{{ url('update_room', $room->id) }}" 
                                           class="btn btn-warning btn-sm">Update</a>
                                    </td>

                                    <td>
                                        <form action="{{ url('delete_room', $room->id) }}" method="POST" 
                                              onsubmit="return confirm('Are you sure you want to delete this room?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center">No rooms found</td>
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

@include('admin.footer')

</body>
</html>
