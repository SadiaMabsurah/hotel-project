<div class="contact" style="font-family: 'Georgia', serif; background: linear-gradient(135deg, #fdf6f6, #ffeef0); padding:50px 0;">
    <div class="container">
        <!-- Title -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="titlepage text-center">
                    <h2>Contact Us</h2>
                    <p style="color:#6b4b4b; font-size:1rem; margin-top:5px;">We’d love to hear from you. Send us a message or find us on the map!</p>
                </div>
            </div>
        </div>

        <div class="row g-4 align-items-center">
            <!-- Contact Form -->
            <div class="col-md-6">
                <form id="request" class="main_form" style="background:#fff; padding:25px; border-radius:20px; box-shadow:0 8px 25px rgba(75,0,0,0.12); transition: transform 0.3s ease;">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <input class="contactus form-control" placeholder="Name" type="text" name="Name"> 
                        </div>
                        <div class="col-md-12 mb-2">
                            <input class="contactus form-control" placeholder="Email" type="email" name="Email"> 
                        </div>
                        <div class="col-md-12 mb-2">
                            <input class="contactus form-control" placeholder="Phone Number" type="text" name="Phone">                          
                        </div>
                        <div class="col-md-12 mb-2">
                            <textarea class="textarea form-control" placeholder="Message" name="Message" rows="4"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="send_btn btn w-100" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Google Map -->
            <div class="col-md-6">
                <div class="map_main" style="border-radius:20px; overflow:hidden; box-shadow:0 8px 25px rgba(75,0,0,0.12); transition: transform 0.3s ease; height:320px;">
                    <div class="map-responsive" style="overflow:hidden; padding-bottom:0; position:relative; height:100%;">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                            style="border:0; position:absolute; top:0; left:0; width:100%; height:100%;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .titlepage h2 {
        font-family: 'Georgia', serif;
        font-size: 2.5rem;
        color: #4B0000;
        font-weight: 700;
    }

    .contactus, .textarea {
        font-family: 'Georgia', serif;
        padding: 10px 15px;
        border-radius: 12px;
        border: 1px solid #ccc;
        font-size: 0.95rem;
        width: 100%;
        transition: all 0.3s ease;
        background-color: #fdf6f6;
        box-shadow: inset 0 2px 5px rgba(0,0,0,0.05);
    }

    .contactus:focus, .textarea:focus {
        border-color: #4B0000;
        box-shadow: 0 0 10px rgba(75,0,0,0.2);
        outline: none;
        background-color: #fff5f5;
    }

    .send_btn {
        font-family: 'Georgia', serif;
        background-color: #ce0505ff;
        color: #fff;
        border: none;
        padding: 12px 20px;
        font-weight: 600;
        border-radius: 50px;
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(75,0,0,0.2);
    }

    .send_btn:hover {
        background-color: #fff;
        color: #ce0505ff;
        border: 2px solid #ce0505ff;
        box-shadow: 0 6px 15px rgba(75,0,0,0.25);
        transform: translateY(-2px);
    }

    .map-responsive iframe {
        border-radius: 0;
    }

    .main_form:hover, .map_main:hover {
        transform: translateY(-3px);
    }

    @media (max-width: 767px) {
        .titlepage h2 {
            font-size: 2rem;
        }
        .main_form, .map_main {
            margin-top: 15px;
        }
    }
</style>
