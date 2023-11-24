<section id="wsus__featured_listing">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 m-auto">
                <div class="wsus__heading_area">
                    <h2>{{ $sectionTitle?->our_featured_listing_title }}</h2>
                    <p>{{ $sectionTitle?->our_featured_listing_sub_title }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row listing_slider">
            @foreach ($featuredListings as $listing)
                <div class="col-xl-4 col-sm-6">
                    <div class="wsus__featured_single">
                        <div class="wsus__featured_single_img">
                            <img src="{{ asset($listing->image) }}" alt="{{ $listing->title }}" class="img-fluid w-100">
                            {{-- <a href="#" class="love"><i class="fas fa-heart"></i></a> --}}
                            <a href="{{ route('listings', ['category' => $listing->category->slug]) }}" class="small_text">{{ $listing->category->name }}</a>
                        </div>
                        <a class="map" onclick="showListingModal('{{ $listing->id }}')" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                            href="#"><i class="fas fa-info"></i></a>
                        <div class="wsus__featured_single_text">
                            <p class="list_rating">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= intval($listing->reviews_avg_rating))
                                        <i class="fas fa-star"></i>
                                    @else
                                        <i class="far fa-star"></i>
                                    @endif
                                @endfor
                                <span>({{ $listing->reviews_count }} review)</span>
                            </p>
                            <a href="{{ route('listing.show', $listing->slug) }}">{{ truncate($listing->title) }}</a>
                            <p class="address">{{ $listing->location->name }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
