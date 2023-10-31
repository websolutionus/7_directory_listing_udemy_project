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
                    <form>
                        <div class="listing_grid_sidbar">
                            <div class="sidebar_line">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </div>
                            <div class="sidebar_line_select">
                                <select class="select_2" name="state">
                                    <option value="">categorys</option>
                                    <option value="">category 1</option>
                                    <option value="">category 2</option>
                                    <option value="">category 3</option>
                                    <option value="">category 4</option>
                                    <option value="">category 5</option>
                                </select>
                            </div>
                            <div class="sidebar_line_select">
                                <select class="select_2" name="state">
                                    <option value="">location</option>
                                    <option value="">location 1</option>
                                    <option value="">location 2</option>
                                    <option value="">location 3</option>
                                    <option value="">location 4</option>
                                    <option value="">location 5</option>
                                </select>
                            </div>
                            <div class="wsus__pro_check">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckIndeterminate4">
                                    <label class="form-check-label" for="flexCheckIndeterminate4">
                                        Heating
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckIndeterminate5">
                                    <label class="form-check-label" for="flexCheckIndeterminate5">
                                        Smoking Allow
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckIndeterminate6">
                                    <label class="form-check-label" for="flexCheckIndeterminate6">
                                        Icon
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckIndeterminate7">
                                    <label class="form-check-label" for="flexCheckIndeterminate7">
                                        Parking
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckIndeterminate">
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                        Air Condition
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckIndeterminate1">
                                    <label class="form-check-label" for="flexCheckIndeterminate1">
                                        Internet
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckIndeterminate2">
                                    <label class="form-check-label" for="flexCheckIndeterminate2">
                                        Terrace
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckIndeterminate3">
                                    <label class="form-check-label" for="flexCheckIndeterminate3">
                                        Wi-Fi
                                    </label>
                                </div>
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
                                    <a href="#" class="love"><i class="fas fa-heart"></i></a>
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
