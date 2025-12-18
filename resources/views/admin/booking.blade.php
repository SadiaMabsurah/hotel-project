<!DOCTYPE html>
<html>
<head> 
    @include('admin.css')
    <style type="text/css">
        
    </style>
</head>
<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->

    
    <div class="page-content">
        <div class="page-header">
        <div class="container-fluid">

        <div class="page-content w-100">
        <div class="container-fluid">

            <div class="card mt-4">
                <div class="card-header bg-primary text-white">
                    <h3 class="h5 mb-0">Booking List</h3>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center">
                            <thead class="table-light">
                                <tr>
                                    <th>Room_id</th>
                                    <th>Customer name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Room Title</th>
                                    <th>Price</th>
                                    <th>Arrival Date</th>
                                    <th>Leaving Date</th>
                                    <th>Image</th>
                                    
                                </tr>
                            </thead>
        

                            <tbody>

                            @foreach($data as $booking)
                                <tr>
                                    <td>{{$booking->room_id}}</td>
                                    <td>{{$booking->name}}</td>
                                    <td>{{$booking->email}}</td>
                                    <td>{{$booking->phone}}</td>
                                    <td>{{$booking->status}}</td>
                                    <td>{{$booking->room->room_title}}</td>
                                    <td>{{$booking->room->price}}</td>
                                    <td>{{$booking->start_date}}</td>
                                    <td>{{$booking->end_date}}</td>
                                    <td>
                                        <img src="{{ asset('room/'.$booking->room->image) }}" 
                                             style="width:80px; height:60px; object-fit:cover; border-radius:5px;">
                                    </td>
                                    

                                </tr>    
                            
                            @endforeach
                            </tbody>

                        </table>






        </div>
        </div>
        </div>

        @include('admin.footer')
</body>
</html>