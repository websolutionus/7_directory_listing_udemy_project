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
                        <h4>Contact us</h4>
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"> Home </a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact </li>
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
        GET IN TOUCH START
    ===========================-->
    <section id="get_in_touch">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact_box">
                        <div class="contact_box_icon">
                            <i class="fal fa-phone-square-alt"></i>
                        </div>
                        <div class="contact_box_text">
                            <a href="callto: +96582462545425">+ 96582462545425</a>
                            <a href="callto: +96582462545425">+ 96582462545425</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact_box">
                        <div class="contact_box_icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact_box_text">
                            <a href="mailto: example@gmail.com">example@gmail.com</a>
                            <a href="mailto: example@gmail.com">example@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact_box">
                        <div class="contact_box_icon">
                            <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="contact_box_text">
                            <p>535 Talbot Street (at Kent Street) London, Ontario</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2>message here</h2>
                    <form>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="contact_input">
                                    <input type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact_input">
                                    <input type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact_input">
                                    <input type="text" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact_input">
                                    <input type="text" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact_input">
                                    <textarea cols="3" rows="5" placeholder="Message"></textarea>
                                    <button class="read_btn" type="submit">send message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="contact_map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14599.891499433526!2d90.44560068647732!3d23.819563582905406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c62fce7d991f%3A0xacfaf1ac8e944c05!2sBasundhara%20Residential%20Area%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1632724653244!5m2!1sen!2sbd"
                            width="2000" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
        GET IN TOUCH END
    ===========================-->
@endsection
