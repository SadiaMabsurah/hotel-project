<div class="about">
    <div class="container-fluid py-5" style="background: #f7f7f7;">
        <div class="row align-items-center">
            <!-- Text Section -->
            <div class="col-md-5">
                <div class="titlepage about-text">
                    <h2>About Us</h2>
                    <p>Welcome to <strong>SaFa Hotel</strong>, where comfort meets elegance. Our hotel is dedicated to providing guests with a memorable stay through exceptional service, cozy rooms, and modern amenities. Whether you are here for business or leisure, our friendly staff ensures a relaxing and enjoyable experience. At SaFa Hotel, we strive to create a warm and inviting atmosphere, making every visit special.</p>
                    <a class="read_more send_btn" href="Javascript:void(0)">Read More</a>
                </div>
            </div>
            <!-- Image Section -->
            <div class="col-md-7">
                <div class="about_img text-center">
                    <figure>
                        <img src="images/about.jfif" alt="About SaFa Hotel" class="img-fluid rounded shadow-lg"/>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* About Us Text */
.about-text h2 {
    font-family: 'Georgia', serif;
    font-size: 2.8rem;
    font-weight: 600;
    color: #000;  /* Changed to black */
    margin-bottom: 20px;
}

.about-text p {
    font-family: 'Georgia', serif;
    font-size: 1.15rem;
    color: #555;
    line-height: 1.8;
    margin-bottom: 25px;
}

.send_btn {
    font-family: 'Georgia', serif;
    background-color: #000;  /* Changed to black */
    color: #fff;
    border: none;
    padding: 12px 20px;
    font-weight: 600;
    border-radius: 50px;
    font-size: 1rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}

.send_btn:hover {
    background-color: #fff;
    color: #000;   /* Text turns black on hover */
    border: 2px solid #000;  /* Black border on hover */
    box-shadow: 0 6px 15px rgba(0,0,0,0.25);
    transform: translateY(-2px);
}

/* Image Styling */
.about_img img {
    max-width: 100%;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.about_img img:hover {
    transform: scale(1.03);
    box-shadow: 0 15px 35px rgba(0,0,0,0.25);
}
</style>
