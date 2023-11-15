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
                        <h4>About</h4>
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"> Home </a></li>
                                <li class="breadcrumb-item active" aria-current="page"> About </li>
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
        ABOUT  START
    ===========================-->
    <section id="about_page">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-6">
                    <div class="about_text">
                        <h4>Success usually comes to those who are busy to be looking for it</h4>
                        <p>Lorem ipsum dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola, est
                            ut clita dolorem, ei est mazim fuisset scribentur. Mel ut decore salutandi intellegam.</p>
                        <p>Lorem ipsum dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola, est
                            ut clita dolorem, ei est mazim fuisset scribentur. Mel ut decore salutandi intellegam.</p>
                        <ul>
                            <li>Quo ei erant essent scaevola, est ut clita dolorem, ei est mazim fuisset scribentur.
                            </li>
                            <li>Mel ut decore salutandi intellegam. Labitur epicurei vis cu, in mei rationibus
                                consequuntur.</li>
                            <li>Laudem cetero principes at eam. Ne sit latine appetere erroribus</li>
                            <li>Dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola</li>
                            <li>Decore salutandi intellegam. Labitur epicurei vis cu, in mei rationibus consequuntur.
                            </li>
                            <li>cCnsequuntur duo eu modus periculis, inermis detracto expetendis ius eu.</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola, est
                            ut clita dolorem, ei est mazim fuisset scribentur. Mel ut decore salutandi intellegam. ipsum
                            dolor sit amet, qui assum oblique praesent te. Quo ei erant essent scaevola, est ut clita
                        </p>

                        <a href="#">learn more</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="about_img">
                        <img src="images/about_img.jpg" alt="about" class="img-fluid w-100">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/668nUCeBHyY">
                            <i class=" fas fa-play"></i>
                        </a>
                        <div class="img_2">
                            <img src="images/location_6.jpg" alt="about" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
        ABOUT END
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
@endsection
