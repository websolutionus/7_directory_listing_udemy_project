<section id="wsus__location">
    <div class="wsus__location_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="wsus__heading_area">
                        <h2>Our location </h2>
                        <p>Lorem ipsum dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola
                            estut clita dolorem ei est mazim fuisset scribentur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="wsus__location_filter">
                        <button class="active" data-filter="*">All City</button>
                        @foreach ($featuredLocations as $location)
                        <button data-filter=".{{ $location->slug }}">{{ $location->name }}</button>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="row grid">
                <div class="col-xl-3 col-sm-6 col-lg-4 newyork hongkong tokyo">
                    <div class="wsus__featured_single">
                        <div class="wsus__featured_single_img">
                            <img src="images/location_1.jpg" alt="images" class="img-fluid w-100">
                            <a href="#" class="love"><i class="fas fa-heart"></i></a>
                            <a href="#" class="small_text">market</a>
                        </div>
                        <a class="map" data-bs-toggle="modal" data-bs-target="#exampleModal2" href="#"><i
                                class="fas fa-info"></i></a>
                        <div class="wsus__featured_single_text">
                            <p class="list_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(5 review)</span>
                            </p>
                            <a href="#">school and child care</a>
                            <p class="address"> Washington, Illinois</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
