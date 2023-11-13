<section id="wsus__testimonial">
    <div class="wsus__test_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="wsus__heading_area">
                        <h2>Testimonials</h2>
                        <p>Lorem ipsum dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola
                            estut clita dolorem ei est mazim fuisset scribentur.</p>
                    </div>
                </div>
            </div>
            <div class="row testi_slider">
                @foreach ($testimonials as $testimonial)
                <div class="col-xl-6">
                    <div class="wsus__single_clients">
                        <div class="text">
                            <img src="{{ asset($testimonial->image) }}" alt="clients" class="img-fluid">
                            <p class="c_name">{{ $testimonial->name }}
                                <span class="c_det">{{ $testimonial->title }}</span>
                            </p>
                        </div>
                        <p class="descrption">{{ $testimonial->review }}</p>
                        <p class="rating">
                            @for ($i = 1; $i <= $testimonial->rating; $i ++)
                            <i class="fas fa-star"></i>
                            @endfor

                        </p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
