<div class="our_room py-5" style="background: #f7f7f7;">
    <div class="container">
        <!-- Section Title -->
        <div class="row mb-4">
            <div class="col-md-12 text-center">
                <div class="titlepage text-center">
                    <h2>Our Rooms</h2>
                    <p>Comfortable and well-equipped rooms designed for a perfect stay.</p>
                </div>
            </div>
        </div>
        
        <!-- Rooms List -->
        <div class="row justify-content-center">
            @foreach($room as $rooms)
            <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-center">
                <div class="room_card shadow-sm rounded overflow-hidden text-center">
                    <div class="room_img">
                        <img src="room/{{$rooms->image}}" alt="{{$rooms->room_title}}" class="img-fluid room-img">
                    </div>
                    <div class="bed_room p-3">
                        <h3>{{$rooms->room_title}}</h3>
                        <p>{!! Str::limit($rooms->description, 100) !!}</p>
                        <a class="btn btn-danger mt-3" href="{{ url('room_details',$rooms->id) }}">Room Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<style>
/* Section Title */
.titlepage h2 {
    font-family: 'Georgia', serif;
    font-size: 2.5rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
}

.titlepage p {
    font-family: 'Georgia', serif;
    font-size: 1.1rem;
    color: #555;
}

/* Room Card */
.room_card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center; /* centers all content */
    text-align: center;
}

.room_card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
}

.room_img .room-img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    transition: transform 0.3s ease;
    border-bottom: 1px solid #ddd;
}

.room_card:hover .room_img .room-img {
    transform: scale(1.05);
}

/* Bed Room Section */
.bed_room h3 {
    font-family: 'Georgia', serif;
    font-size: 1.5rem;
    margin-bottom: 10px;
    color: #333;
}

.bed_room p {
   font-family: 'Georgia', serif;
    font-size: 0.95rem;
    color: #555;
    line-height: 1.6;
    margin-bottom: 15px;
}

/* Room Details Button */
.bed_room .btn-danger {
    font-family: 'Georgia', serif;
    background-color: #ce0505ff; /* deep burgundy */
    border: 2px solid #ce0505ff;
    color: #fff;
    width: 150px; /* fixed width for consistency */
    transition: all 0.3s ease;
    border-radius: 50px; /* rounded for modern look */
}

.bed_room .btn-danger:hover {
    background-color: #fff;
    color: #ce0505ff;
    border: 2px solid #ce0505ff;
}




</style>
