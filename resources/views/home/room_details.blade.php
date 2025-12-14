<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <title>Room Details & Booking</title>
    @include('home.css')
    <style>
        .room-details img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .booking-form input, .booking-form label {
            display: block;
            width: 100%;
            margin-bottom: 12px;
        }
        .booking-form input[type="submit"] {
            width: auto;
            padding: 10px 20px;
        }
        .room-info h2, .room-info h3, .room-info h4 {
            margin-bottom: 10px;
        }
        .room-info p {
            margin-bottom: 15px;
        }
    </style>
</head>
<body class="main-layout">
    <!-- loader -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="Loading"/></div>
    </div>

    <!-- header -->
    <header>
        @include('home.header')
    </header>

    <!-- Room Details & Booking Section -->
    <div class="our_room py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12 text-center">
                    <div class="titlepage">
                        <h2>Our Room</h2>
                        <p>Comfortable and well-equipped rooms designed for a perfect stay.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Room Details -->
                <div class="col-md-8">
                    <div class="room-details">
                        <img src="room/{{$room->image}}" alt="{{$room->room_title}}">
                        <div class="room-info mt-3">
                            <h2>{{$room->room_title}}</h2>
                            <p>{{$room->description}}</p>
                            <h4>Free Wifi: {{$room->wifi}}</h4>
                            <h4>Room Type: {{$room->room_type}}</h4>
                            <h3>Price: ${{$room->price}}</h3>
                        </div>
                    </div>
                </div>

                <!-- Booking Form -->
                <div class="col-md-4">
                    <div class="booking-form border p-3 rounded">
                        <h3 class="mb-3">Book This Room</h3>

                        <!-- Display Validation Errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Success Message -->
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ url('book_room', $room->id) }}" method="POST">
                            @csrf
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter your name" required
                            @if(Auth::id())value="{{Auth::user()->name}}"@endif>

                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email" required
                            @if(Auth::id()) value="{{ Auth::user()->email }}" @endif> 

                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" placeholder="Enter your phone" required
                            @if(Auth::id()) value="{{ Auth::user()->phone }}" @endif>

                            <label for="startDate">Start Date</label>
                            <input type="date" id="startDate" name="startDate" required>

                            <label for="endDate">End Date</label>
                            <input type="date" id="endDate" name="endDate" required>

                            <input type="submit" class="btn btn-primary mt-3" value="Book Room">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    @include('home.footer')

    <script>
        // Prevent selecting previous dates
        document.addEventListener('DOMContentLoaded', function() {
            const startDateInput = document.getElementById('startDate');
            const endDateInput = document.getElementById('endDate');

            const today = new Date();
            const yyyy = today.getFullYear();
            let mm = today.getMonth() + 1;
            let dd = today.getDate();

            if(mm < 10) mm = '0' + mm;
            if(dd < 10) dd = '0' + dd;

            const todayStr = yyyy + '-' + mm + '-' + dd;

            startDateInput.setAttribute('min', todayStr);
            endDateInput.setAttribute('min', todayStr);

            startDateInput.addEventListener('change', function() {
                endDateInput.setAttribute('min', this.value);
            });
        });
    </script>

    <!-- Javascript files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
