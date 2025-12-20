<div class="gallery py-5" style="background: #f7f7f7;">
    <div class="container">
        <!-- Section Title -->
        <div class="row mb-4">
            <div class="col-md-12 text-center">
                <div class="titlepage text-center">
                    <h2>Gallery</h2>
                </div>
            </div>
        </div>

        <!-- Gallery Images -->
        <div class="row g-3">
            @foreach($gallary as $gallary)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 d-flex justify-content-center">
                <div class="gallery_img shadow-sm rounded overflow-hidden">
                    <figure>
                        <img src="/gallary/{{ $gallary->image }}" alt="Gallery Image" class="img-fluid gallery-item">
                    </figure>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<style>
.titlepage h2 {
    font-family: 'Georgia', serif;
    font-size: 2.5rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
}

/* Gallery Image Card */
.gallery_img {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.gallery_img:hover {
    transform: scale(1.05);
    box-shadow: 0 15px 35px rgba(0,0,0,0.25);
}

.gallery-item {
    width: 100%;
    height: 200px; /* uniform height */
    object-fit: cover; /* maintain aspect ratio */
    border-radius: 10px;
}
</style>
