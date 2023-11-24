@extends('frontend.layouts.master')

@section('contents')
    <!--==========================
            BREADCRUMB PART START
        ===========================-->
    <div id="breadcrumb_part">
        <div class="bread_overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center text-white">
                        <h4>listing</h4>
                        <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"> Home </a></li>
                                <li class="breadcrumb-item active" aria-current="page"> listing </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==========================
            BREADCRUMB PART END
        ===========================-->


    <!--==========================
            LISTING PAGE START
        ===========================-->
    <section id="listing_grid" class="grid_view">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <form action="{{ route('listings') }}" method="GET">
                        <div class="listing_grid_sidbar">
                            <div class="sidebar_line">
                                <input type="text" placeholder="Search" name="search" value="{{ request()->search }}">

                            </div>
                            <div class="sidebar_line_select">
                                <select class="select_2" name="category">
                                    <option>categorys</option>
                                    @foreach ($categories as $category)
                                        <option @selected($category->slug == request()->category) value="{{ $category->slug }}">{{ $category->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="sidebar_line_select">
                                <select class="select_2" name="location">
                                    <option value="">location</option>
                                    @foreach ($locations as $location)
                                    <option @selected($location->slug == request()->location) value="{{ $location->slug }}">{{ $location->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="wsus__pro_check">
                                @foreach ($amenities as $amenity)
                                <div class="form-check">
                                    <input @checked(in_array($amenity->slug, (request()->has('amenity') && is_array(request()->amenity)) ? request()->amenity : [])) class="form-check-input" type="checkbox" value="{{ $amenity->slug }}" name="amenity[]"
                                        id="flexCheckIndeterminate-{{ $amenity->id }}">
                                    <label class="form-check-label" for="flexCheckIndeterminate-{{ $amenity->id }}">
                                        {{ $amenity->name }}
                                    </label>
                                </div>
                                @endforeach

                            </div>
                            <button class="read_btn" type="submit">search</button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-9">
                    <div class="row">

                        @foreach ($listings as $listing)
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

                        <div class="col-12">
                            <div id="pagination">
                                @if ($listings->hasPages())
                                {{ $listings->links() }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
            LISTING PAGE START
        ===========================-->
@endsection
