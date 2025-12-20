<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <title>Room Details & Booking</title>
    @include('home.css')

    <style>
        /* Global Styles */
        body, input, textarea, button {
            font-family: 'Georgia', serif;
            color: #333;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        h2, h3, h4 {
            margin: 0;
        }

        /* Loader */
        .loader_bg {
            position: fixed;
            z-index: 999999;
            background: #fff;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Room Section */
        .our_room {
            padding: 40px 0;
        }

        .titlepage {
            margin-top: 0;
        }

        .titlepage h2 {
            font-size: 3rem;
            font-weight: 700;
            color: #000; /* Changed to black */
            margin-bottom: 10px;
            text-align: center;
        }

        .titlepage p {
            font-size: 1.2rem;
            color: #555;
            text-align: center;
            max-width: 650px;
            margin: 0 auto 50px;
            line-height: 1.6;
        }

        /* Room Details Card */
        .room-details {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .room-details img {
            width: 100%;
            height: 450px;
            object-fit: cover;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .room-details:hover img {
            transform: scale(1.05);
            box-shadow: 0 20px 40px rgba(0,0,0,0.25);
        }

        .room-info {
            padding: 30px 25px;
        }

        .room-info h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #000; /* Changed to black */
            margin-bottom: 15px;
        }

        .room-info p {
            font-size: 1.05rem;
            line-height: 1.7;
            color: #555;
            margin-bottom: 20px;
        }

        .room-info h3 {
            font-size: 2rem;
            font-weight: 700;
            margin-top: 15px;
            color: #000; /* Changed to black */
        }

        /* Feature badges */
        .room-features {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }

        .wifi-feature {
            background: #d4edda; /* light green */
            color: #155724;
            padding: 8px 15px;
            border-radius: 12px;
            font-weight: 600;
        }

        .type-feature {
            background: #ffe5b4; /* light orange */
            color: #b35900;
            padding: 8px 15px;
            border-radius: 12px;
            font-weight: 600;
        }

        /* Booking Form */
        .booking-form {
            background: #fff;
            padding: 50px 35px;
            border-radius: 20px;
            box-shadow: 0 20px 45px rgba(0,0,0,0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .booking-form:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.2);
        }

        .booking-form h3 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 35px;
            text-align: center;
            color: #000; /* Changed to black */
        }

        .booking-form label {
            font-weight: 600;
            margin-bottom: 8px;
            display: block;
            color: #444;
        }

        .booking-form input[type="text"],
        .booking-form input[type="email"],
        .booking-form input[type="date"] {
            width: 100%;
            padding: 14px 18px;
            margin-bottom: 18px;
            border: 1px solid #ddd;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .booking-form input[type="text"]:focus,
        .booking-form input[type="email"]:focus,
        .booking-form input[type="date"]:focus {
            border-color: #000; /* Changed focus border to black */
            outline: none;
            box-shadow: 0 0 12px rgba(0,0,0,0.25);
        }

        /* Submit Button (Blue) */
        .booking-form input[type="submit"] {
            background-color: #007BFF;  /* Blue */
            color: #fff;
            border: none;
            padding: 15px 25px;
            font-size: 1.1rem;
            font-weight: 700;
            border-radius: 50px;
            cursor: pointer;
            width: 100%;
            transition: all 0.3s ease;
        }

        .booking-form input[type="submit"]:hover {
            background-color: #fff;
            color: #007BFF;   /* Blue text on hover */
            border: 2px solid #007BFF;
            transform: translateY(-2px);
        }

        /* Alerts */
        .alert {
            font-size: 0.95rem;
            padding: 12px 18px;
            border-radius: 12px;
            margin-bottom: 20px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #528effff;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .room-details img {
                height: 380px;
            }
        }

        @media (max-width: 767px) {
            .booking-form {
                padding: 40px 25px;
            }
        }

        @media (max-width: 575px) {
            .room-details img {
                height: 220px;
            }

            .titlepage h2 {
                font-size: 2rem;
            }

            .booking-form h3 {
                font-size: 1.5rem;
            }
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
    <div class="our_room">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Room</h2>
                        <p>Comfortable and well-equipped rooms designed for a perfect stay.</p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Room Details -->
                <div class="col-lg-7 col-md-12">
                    <div class="room-details shadow-sm">
                        <img src="room/{{$room->image}}" alt="{{$room->room_title}}">
                        <div class="room-info mt-4 px-4 pb-4">
                            <h2>{{$room->room_title}}</h2>
                            <p>{{$room->description}}</p>
                            <div class="room-features">
                                <div class="wifi-feature">Free Wifi: {{$room->wifi}}</div>
                                <div class="type-feature">Room Type: {{$room->room_type}}</div>
                            </div>
                            <h3>${{$room->price}}</h3>
                        </div>
                    </div>
                </div>

                <!-- Booking Form -->
                <div class="col-lg-5 col-md-12">
                    <div class="booking-form">
                        <h3>Book This Room</h3>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(session('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif

                        <form action="{{ url('book_room', $room->id) }}" method="POST">
                            @csrf
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter your name" required
                            @if(Auth::id()) value="{{Auth::user()->name}}" @endif>

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

                            <input type="submit" value="Book Room">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    @include('home.footer')

    <script>
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

    <!-- JS Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
