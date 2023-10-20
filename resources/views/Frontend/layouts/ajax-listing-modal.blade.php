<div class="row">
    <div class="col-12 col-xl-12 col-md-12">
        <div class="map_popup_content">
            <div class="img">
                <img src="{{ asset($listing->image) }}" alt="{{ $listing->title }}" class="img-fluid w-100">
            </div>
            <div class="map_popup_text">
                @if ($listing->is_featured)
                <span><i class="far fa-star"></i> Featured</span>
                @endif
                @if ($listing->is_verified)
                <span class="red"><i class="far fa-check"></i> verified</span>
                @endif
                <h5>{{ $listing->title }}</h5>
                <a class="call" href="callto:{{ $listing->phone }}"><i class="fal fa-phone-alt"></i>
                    {{ $listing->phone }}</a>
                <a class="mail" href="mailto:{{ $listing->email }}"><i class="fal fa-envelope"></i>
                    {{ $listing->email }}</a>
                <p>{{ truncate(strip_tags($listing->description), 140) }}</p>
                <a class="read_btn" href="">read more</a>
            </div>
        </div>
    </div>
    @if ($listing->google_map_embed_code)
    <div class="col-12 col-xl-12 col-md-12">
        <div class="map_popup_content_map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9858724809806!2d90.37746441534016!3d23.747883194788518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b17fc6ff45%3A0xf04f00d1bfe07561!2sDhanmondi%20Lake%20Park%2C%20Rd%2010%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1634532335570!5m2!1sen!2sbd"
                width="1000" height="800" style="border:0;" allowfullscreen=""
                loading="lazy"></iframe>
        </div>
    </div>
    @endif
</div>
