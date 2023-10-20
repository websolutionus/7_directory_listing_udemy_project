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
                                <a class="map" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                                    href="#"><i class="fas fa-info"></i></a>
                                <div class="wsus__featured_single_text">
                                    <p class="list_rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span>(5 review)</span>
                                    </p>
                                    <a href="#">{{ $listing->title }}</a>
                                    <p class="address">{{ $listing->location->name }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-12">
                            <div id="pagination">
                                <nav aria-label="">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i
                                                    class="fas fa-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">01</a></li>
                                        <li class="page-item" aria-current="page">
                                            <a class="page-link" href="#">02</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">03</a></li>
                                        <li class="page-item"><a class="page-link" href="#">04</a></li>
                                        <li class="page-item"><a class="page-link" href="#">05</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="wsus__map_popup">
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="btn-close popup_close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="far fa-times"></i></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 col-xl-12 col-md-12">
                                <div class="map_popup_content">
                                    <div class="img">
                                        <img src="images/location_3.jpg" alt="images" class="img-fluid w-100">
                                    </div>
                                    <div class="map_popup_text">
                                        <span><i class="far fa-star"></i> Featured</span>
                                        <span class="red"><i class="far fa-check"></i> verified</span>
                                        <h5>market shopping mall</h5>
                                        <a class="call" href="callto:+69552200325444"><i class="fal fa-phone-alt"></i>
                                            +69552200325444</a>
                                        <a class="mail" href="mailto:example@gmail.com"><i class="fal fa-envelope"></i>
                                            example@gmail.com</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur at adipisicing elit. Corporis nisi
                                            deleniti neque recusandae, incidunt eum temporibus quod.</p>
                                        <a class="read_btn" href="#">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-12 col-md-12">
                                <div class="map_popup_content_map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9858724809806!2d90.37746441534016!3d23.747883194788518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b17fc6ff45%3A0xf04f00d1bfe07561!2sDhanmondi%20Lake%20Park%2C%20Rd%2010%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1634532335570!5m2!1sen!2sbd"
                                        width="1000" height="800" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                </div>
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
