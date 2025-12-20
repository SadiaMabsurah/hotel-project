<section class="banner_main">
    <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Carousel Items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 banner-img" src="images/banner1.jpg" alt="Luxury Hotel Room">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center elegant-text">
                    <h1>Welcome to SaFa Hotel</h1>
                    <p>Experience luxury, comfort, and elegance in every stay.</p>
                    <a href="#booking" class="btn btn-danger btn-lg mt-3">Book Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 banner-img" src="images/banner2.jpg" alt="Hotel Facilities">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center elegant-text">
                    <h1>Exceptional Amenities</h1>
                    <p>From fine dining to spa retreats, enjoy our premium services.</p>
                    <a href="#booking" class="btn btn-danger btn-lg mt-3">Book Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 banner-img" src="images/banner3.jpg" alt="Hotel View">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center elegant-text">
                    <h1>Stunning Views</h1>
                    <p>Relax and unwind with breathtaking scenery around you.</p>
                    <a href="#booking" class="btn btn-danger btn-lg mt-3">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<style>
/* Reduce banner height */
.banner-img {
    max-height: 780px; /* adjust this value as needed */
    object-fit: cover;
}

/* Elegant overlay text */
.elegant-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: linear-gradient(to bottom, rgba(0,0,0,0.35), rgba(0,0,0,0.6));
    padding: 40px 60px;
    border-radius: 15px;
    text-align: center;
    animation: fadeIn 2s ease-in-out;
}

.elegant-text h1 {
    font-family: 'Georgia', serif;
    font-size: 3.2rem;
    font-weight: 600;
    color: #fff;
    margin-bottom: 15px;
    text-shadow: 2px 2px 12px rgba(0,0,0,0.7);
}

.elegant-text p {
    font-family: 'Georgia', serif;
    font-size: 1.3rem;
    color: #f8f8f8;
    text-shadow: 1px 1px 8px rgba(0,0,0,0.6);
    margin-bottom: 20px;
}

.elegant-text .btn-danger {
   font-family: 'Georgia', serif;
    border: 2px solid #ce0505ff;
    background-color: #ce0505ff;
    color: #fff;
    font-weight: 500;
    transition: 0.3s;
}

.elegant-text .btn-danger:hover {
   font-family: 'Georgia', serif;
    background-color: #fff;
    color: #ce0505ff;
    border: 2px solid #ce0505ff;
}

/* Fade-in animation */
@keyframes fadeIn {
    0% { opacity: 0; transform: translate(-50%, -55%); }
    100% { opacity: 1; transform: translate(-50%, -50%); }
}
</style>
