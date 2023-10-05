@extends('frontend.layouts.master')

@section('contents')
    <!--==========================
            BANNER PART START
        ===========================-->
    <section id="wsus__banner">
        <div class="wsus__banner_overlay">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-7">
                        <div class="wsus__banner_text">
                            <h1>Let us help you Find Buy & Own Dreams</h1>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos quasi facilis, cupiditate
                                rem voluptates omnis repellat consectetur nihil quod a, illo nemo eveniet iste, minima
                                delectus doloribus! Praesentium, maiores iusto? </p>
                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-5">
                        <form>
                            <h3>Find the Best Place Title</h3>
                            <div class="wsus__search_area">
                                <input type="text" placeholder="What we are looking for?">
                            </div>
                            <div class="wsus__search_area">
                                <select class="select_2" name="state">
                                    <option value="">categories</option>
                                    <option value="">categories 1</option>
                                    <option value="">categories 2</option>
                                    <option value="">categories 3</option>
                                    <option value="">categories 4</option>
                                    <option value="">categories 5</option>
                                </select>
                            </div>
                            <div class="wsus__search_area">
                                <select class="select_2" name="state">
                                    <option value="">location</option>
                                    <option value="">location 1</option>
                                    <option value="">location 2</option>
                                    <option value="">location 3</option>
                                    <option value="">location 4</option>
                                    <option value="">location 5</option>
                                </select>
                            </div>
                            <div class="wsus__search_area m-0">
                                <a href="#" class="read_btn">search</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
            BANNER PART END
        ===========================-->


    <!--==========================
            CATEGORY SLIDER START
        ===========================-->
    <section id="wsus__category_slider">
        <div class="container">
            <div class="wsus__category_slider_area">
                <div class="row category_slider">
                    <div class="col-xl-2">
                        <a href="#" class="wsus__category_single_slider">
                            <span>
                                <img src="images/category_icon_5.png" alt="category" class="img-fluid w-100">
                            </span>
                            <p>hotel and resort</p>
                        </a>
                    </div>
                    <div class="col-xl-2">
                        <a href="#" class="wsus__category_single_slider">
                            <span>
                                <img src="images/category_icon_3.png" alt="category" class="img-fluid w-100">
                            </span>
                            <p>office</p>
                        </a>
                    </div>
                    <div class="col-xl-2">
                        <a href="#" class="wsus__category_single_slider color_4">
                            <span>
                                <img src="images/category_icon_6.png" alt="category" class="img-fluid w-100">
                            </span>
                            <p>university</p>
                        </a>
                    </div>
                    <div class="col-xl-2">
                        <a href="#" class="wsus__category_single_slider">
                            <span>
                                <img src="images/category_icon_2.png" alt="category" class="img-fluid w-100">
                            </span>
                            <p>park</p>
                        </a>
                    </div>
                    <div class="col-xl-2">
                        <a href="#" class="wsus__category_single_slider">
                            <span>
                                <img src="images/category_icon_7.png" alt="category" class="img-fluid w-100">
                            </span>
                            <p>business</p>
                        </a>
                    </div>
                    <div class="col-xl-2">
                        <a href="#" class="wsus__category_single_slider">
                            <span>
                                <img src="images/category_icon_8.png" alt="category" class="img-fluid w-100">
                            </span>
                            <p>home</p>
                        </a>
                    </div>
                    <div class="col-xl-2">
                        <a href="#" class="wsus__category_single_slider">
                            <span>
                                <img src="images/category_icon_1.png" alt="category" class="img-fluid w-100">
                            </span>
                            <p>restaurent</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
            CATEGORY SLIDER END
        ===========================-->


    <!--==========================
            FEATURES PART START
        ===========================-->
    <section id="wsus__features">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="wsus__heading_area">
                        <h2>Our Features</h2>
                        <p>Lorem ipsum dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola estut
                            clita dolorem ei est mazim fuisset scribentur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="wsus__feature_single">
                        <div class="icon">
                            <i class="fal fa-atom"></i>
                        </div>
                        <h5>Choose a Category</h5>
                        <p>Proin dapibus nisl ornare diam varius mpus. Aenean a quam luctus, finibus tellus ut,
                            convallis eros.</p>
                        <span>1</span>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="wsus__feature_single active">
                        <div class="icon">
                            <i class="fal fa-map-marked-alt"></i>
                        </div>
                        <h5>Find Location</h5>
                        <p>Proin dapibus nisl ornare diam varius mpus. Aenean a quam luctus, finibus tellus ut,
                            convallis eros.</p>
                        <span>2</span>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="wsus__feature_single">
                        <div class="icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h5>Contact a Few Owners</h5>
                        <p>Proin dapibus nisl ornare diam varius mpus. Aenean a quam luctus, finibus tellus ut,
                            convallis eros.</p>
                        <span>3</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
            FEATURES PART END
        ===========================-->


    <!--==========================
            COUNTER PART START
        ===========================-->
    <section id="wsus__counter">
        <div class="wsus__counter_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-6 col-md-3">
                        <div class="wsus__counter_single">
                            <span class="counter">120</span>
                            <p>Our Team</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6 col-md-3">
                        <div class="wsus__counter_single">
                            <span class="counter">1,189</span>
                            <p>Happy Customers</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6 col-md-3">
                        <div class="wsus__counter_single">
                            <span class="counter">399</span>
                            <p>All Categories</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6 col-md-3">
                        <div class="wsus__counter_single">
                            <span class="counter">400</span>
                            <p>Total Listing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
            COUNTER PART END
        ===========================-->


    <!--==========================
            OUR CATEGORY START
        ===========================-->
    <section id="wsus__categoryes">
        <div class="wsus__categorye_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 m-auto">
                        <div class="wsus__heading_area">
                            <h2>Our Categories</h2>
                            <p>Lorem ipsum dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola
                                estut clita dolorem ei est mazim fuisset scribentur.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-sm-6">
                        <a href="#" class="wsus__category_single">
                            <div class="wsus__category_img">
                                <img src="images/user_small.jpg" alt="img" class="img-fluid w-100">
                            </div>
                            <div class="wsus__category_text">
                                <div class="wsus__category_text_center">
                                    <i class="fab fa-atlassian"></i>
                                    <p>hoter and resort</p>
                                    <span class="green">2 listing</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <a href="#" class="wsus__category_single">
                            <div class="wsus__category_img">
                                <img src="images/user_small2.jpg" alt="img" class="img-fluid w-100">
                            </div>
                            <div class="wsus__category_text">
                                <div class="wsus__category_text_center">
                                    <i class="fas fa-briefcase"></i>
                                    <p>business</p>
                                    <span class="red">9 listing</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <a href="#" class="wsus__category_single">
                            <div class="wsus__category_img">
                                <img src="images/user_small3.jpg" alt="img" class="img-fluid w-100">
                            </div>
                            <div class="wsus__category_text">
                                <div class="wsus__category_text_center">
                                    <i class="fal fa-utensils-alt"></i>
                                    <p>restaurent</p>
                                    <span class="purple">140 listing</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <a href="#" class="wsus__category_single">
                            <div class="wsus__category_img">
                                <img src="images/user_small5.jpg" alt="img" class="img-fluid w-100">
                            </div>
                            <div class="wsus__category_text">
                                <div class="wsus__category_text_center">
                                    <i class="far fa-club"></i>
                                    <p>event and club</p>
                                    <span class="purple">53 listing</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <a href="#" class="wsus__category_single">
                            <div class="wsus__category_img">
                                <img src="images/user_small4.jpg" alt="img" class="img-fluid w-100">
                            </div>
                            <div class="wsus__category_text">
                                <div class="wsus__category_text_center">
                                    <i class="fas fa-trees"></i>
                                    <p>home and garden</p>
                                    <span class="green">20 listing</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <a href="#" class="wsus__category_single">
                            <div class="wsus__category_img">
                                <img src="images/user_small6.jpg" alt="img" class="img-fluid w-100">
                            </div>
                            <div class="wsus__category_text">
                                <div class="wsus__category_text_center">
                                    <i class="fas fa-user-graduate"></i>
                                    <p>education</p>
                                    <span class="red">300 listing</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
            OUR CATEGORY END
        ===========================-->


    <!--==========================
            OUR LOCATION START
        ===========================-->
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
                            <button data-filter=".newyork">New York</button>
                            <button data-filter=".london">London</button>
                            <button data-filter=".parish">Paris</button>
                            <button data-filter=".hongkong">HongKong</button>
                            <button data-filter=".moscow">Moscow</button>
                            <button data-filter=".tokyo">Tokyo</button>
                        </div>
                    </div>
                </div>
                <div class="row grid">
                    <div class="col-xl-3 col-sm-6 col-lg-4 newyork hongkong tokyo">
                        <a href="#" class="wsus__single_location">
                            <div class="img">
                                <img src="images/location_1.jpg" alt="location" class="img-fluid w-100">
                            </div>
                            <div class="wsus__location_text">
                                <p>new york</p>
                                <span>2 listing</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-4 london parish moscow">
                        <a href="#" class="wsus__single_location">
                            <div class="img">
                                <img src="images/location_2.jpg" alt="location" class="img-fluid w-100">
                            </div>
                            <div class="wsus__location_text">
                                <p>thailand</p>
                                <span>10 listing</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-4 newyork hongkong tokyo">
                        <a href="#" class="wsus__single_location">
                            <div class="img">
                                <img src="images/location_3.jpg" alt="location" class="img-fluid w-100">
                            </div>
                            <div class="wsus__location_text">
                                <p>parish</p>
                                <span>31 listing</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-4 london parish moscow">
                        <a href="#" class="wsus__single_location">
                            <div class="img">
                                <img src="images/location_7.jpg" alt="location" class="img-fluid w-100">
                            </div>
                            <div class="wsus__location_text">
                                <p>singapore</p>
                                <span>28 listing</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-4 london hongkong moscow">
                        <a href="#" class="wsus__single_location">
                            <div class="img">
                                <img src="images/location_4.jpg" alt="location" class="img-fluid w-100">
                            </div>
                            <div class="wsus__location_text">
                                <p>japan</p>
                                <span>25 listing</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-4 newyork parish tokyo">
                        <a href="#" class="wsus__single_location">
                            <div class="img">
                                <img src="images/location_5.jpg" alt="location" class="img-fluid w-100">
                            </div>
                            <div class="wsus__location_text">
                                <p>korea</p>
                                <span>15 listing</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-4 london parish moscow">
                        <a href="#" class="wsus__single_location">
                            <div class="img">
                                <img src="images/location_6.jpg" alt="location" class="img-fluid w-100">
                            </div>
                            <div class="wsus__location_text">
                                <p>singapore</p>
                                <span>28 listing</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-4 london parish moscow">
                        <a href="#" class="wsus__single_location">
                            <div class="img">
                                <img src="images/location_8.jpg" alt="location" class="img-fluid w-100">
                            </div>
                            <div class="wsus__location_text">
                                <p>singapore</p>
                                <span>28 listing</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
            OUR LOCATION END
        ===========================-->


    <!--==========================
            FEATURED LISTING START
        ===========================-->
    <section id="wsus__featured_listing">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="wsus__heading_area">
                        <h2>Our Featured Listing </h2>
                        <p>Lorem ipsum dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola estut
                            clita dolorem ei est mazim fuisset scribentur.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row listing_slider">
                <div class="col-xl-3">
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
                <div class="col-xl-3">
                    <div class="wsus__featured_single">
                        <div class="wsus__featured_single_img">
                            <img src="images/location_2.jpg" alt="images" class="img-fluid w-100">
                            <a href="#" class="love"><i class="fas fa-heart"></i></a>
                            <a href="#" class="small_text">school</a>
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
                <div class="col-xl-3">
                    <div class="wsus__featured_single">
                        <div class="wsus__featured_single_img">
                            <img src="images/location_3.jpg" alt="images" class="img-fluid w-100">
                            <a href="#" class="love"><i class="fas fa-heart"></i></a>
                            <a href="#" class="small_text">shopping mall</a>
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
                <div class="col-xl-3">
                    <div class="wsus__featured_single">
                        <div class="wsus__featured_single_img">
                            <img src="images/location_4.jpg" alt="images" class="img-fluid w-100">
                            <a href="#" class="love"><i class="fas fa-heart"></i></a>
                            <a href="#" class="small_text">park</a>
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
                <div class="col-xl-3">
                    <div class="wsus__featured_single">
                        <div class="wsus__featured_single_img">
                            <img src="images/location_5.jpg" alt="images" class="img-fluid w-100">
                            <a href="#" class="love"><i class="fas fa-heart"></i></a>
                            <a href="#" class="small_text">school and college</a>
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
            FEATURED LISTING END
        ===========================-->


    <!--==========================
            OUR PACKAGE START
        ===========================-->
    <section id="wsus__package">
        <div class="wsus__package_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 m-auto">
                        <div class="wsus__heading_area">
                            <h2>Our pricing </h2>
                            <p>Lorem ipsum dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola
                                estut clita dolorem ei est mazim fuisset scribentur.</p>
                        </div>
                    </div>
                </div>
                <div class="procing_area">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="member_price">
                                <h4>basic</h4>
                                <h5>$99.99 <span>/ month</span></h5>
                                <p>Personalized Link Available</p>
                                <p>Free Support Available</p>
                                <p>Personalized Link Available</p>
                                <p>Free Support Available</p>
                                <p>Hide Branding Available</p>
                                <p>Free Setup Available</p>
                                <p>1 vCards</p>
                                <a href="#">Order now</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="member_price active">
                                <h4>standard</h4>
                                <h5>$149.99 <span>/ month</span></h5>
                                <p>Personalized Link Available</p>
                                <p>Free Support Available</p>
                                <p>Personalized Link Available</p>
                                <p>Free Support Available</p>
                                <p>Hide Branding Available</p>
                                <p>Free Setup Available</p>
                                <p>1 vCards</p>
                                <a href="#">Order now</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="member_price">
                                <h4>ultimate</h4>
                                <h5>$190.99 <span>/ month</span></h5>
                                <p>Personalized Link Available</p>
                                <p>Free Support Available</p>
                                <p>Personalized Link Available</p>
                                <p>Free Support Available</p>
                                <p>Hide Branding Available</p>
                                <p>Free Setup Available</p>
                                <p>1 vCards</p>
                                <a href="#">Order now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
            OUR PACKAGE END
        ===========================-->


    <!--============================
            TESTIMONIAL PART START
        ==============================-->
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
                    <div class="col-xl-6">
                        <div class="wsus__single_clients">
                            <div class="text">
                                <img src="images/team-2.jpg" alt="clients" class="img-fluid">
                                <p class="c_name">Kritsofer Nolan
                                    <span class="c_det">Property Owner</span>
                                </p>
                            </div>
                            <p class="descrption">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Cum voluptatibus pariatur laborum consequuntur numquam dolorem
                                nesciunt. Facere doloremque, officia fugiat ullam iusto ducimus aliquid voluptatem
                                deleniti sequi.</p>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="wsus__single_clients">
                            <div class="text">
                                <img src="images/team-2.jpg" alt="clients" class="img-fluid">
                                <p class="c_name">Kritsofer Nolan
                                    <span class="c_det">Property Owner</span>
                                </p>
                            </div>
                            <p class="descrption">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Cum voluptatibus pariatur laborum consequuntur numquam dolorem
                                nesciunt. Facere doloremque, officia fugiat ullam iusto ducimus aliquid voluptatem
                                deleniti sequi.</p>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="wsus__single_clients">
                            <div class="text">
                                <img src="images/team-2.jpg" alt="clients" class="img-fluid">
                                <p class="c_name">Kritsofer Nolan
                                    <span class="c_det">Property Owner</span>
                                </p>
                            </div>
                            <p class="descrption">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Cum voluptatibus pariatur laborum consequuntur numquam dolorem
                                nesciunt. Facere doloremque, officia fugiat ullam iusto ducimus aliquid voluptatem
                                deleniti sequi.</p>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
            TESTIMONIAL PART END
        ==============================-->


    <!--==========================
            BLOG PART START
        ===========================-->
    <section id="blog_part">
        <div class="blog_part_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 m-auto">
                        <div class="wsus__heading_area">
                            <h2>Our blogs </h2>
                            <p>Lorem ipsum dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola
                                estut clita dolorem ei est mazim fuisset scribentur.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="single_blog">
                            <div class="img">
                                <img src="images/blog_1.jpg" alt="bloh images" class="img-fluid w-100">
                            </div>
                            <div class="text">
                                <span><i class="fal fa-calendar-alt"></i> 05 Julay 2021</span>
                                <span><i class="fas fa-user"></i> by admin</span>
                                <a href="#" class="title">How to create a Portfolio</a>
                                <p>Lorem Ipsum is simply dummy of the printing typesetting industry. Lorem Ipsum has
                                    been
                                    simply dummy of the printing </p>
                                <a class="read_btn" href="blog_details.html">learn more <i
                                        class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="single_blog">
                            <div class="img">
                                <img src="images/blog_2.jpg" alt="bloh images" class="img-fluid w-100">
                            </div>
                            <div class="text">

                                <span><i class="fal fa-calendar-alt"></i> 05 Julay 2021</span>
                                <span><i class="fas fa-user"></i> by admin</span>
                                <a href="#" class="title">Maecenas tincidunt vehicula</a>
                                <p>Lorem Ipsum is simply dummy of the printing typesetting industry. Lorem Ipsum has
                                    been
                                    simply dummy of the printing </p>
                                <a class="read_btn" href="blog_details.html">learn more <i
                                        class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="single_blog">
                            <div class="img">
                                <img src="images/blog_3.jpg" alt="bloh images" class="img-fluid w-100">
                            </div>
                            <div class="text">
                                <span><i class="fal fa-calendar-alt"></i> 05 Julay 2021</span>
                                <span><i class="fas fa-user"></i> by admin</span>
                                <a href="#" class="title">How to create a Resume</a>
                                <p>Lorem Ipsum is simply dummy of the printing typesetting industry. Lorem Ipsum has
                                    been
                                    simply dummy of the printing </p>
                                <a class="read_btn" href="blog_details.html">learn more <i
                                        class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
            BLOG PART END
        ===========================-->
@endsection
