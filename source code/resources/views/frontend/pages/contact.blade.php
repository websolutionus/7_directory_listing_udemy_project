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
                            <a href="callto: {{ $contact?->phone }}">{{ $contact?->phone }}</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact_box">
                        <div class="contact_box_icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact_box_text">
                            <a href="mailto: {{ $contact?->email }}">{{ $contact?->email }}</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact_box">
                        <div class="contact_box_icon">
                            <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="contact_box_text">
                            <p>{{ $contact?->address }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2>message here</h2>
                    <form action="{{ route('contact.message') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="contact_input">
                                    <input type="text" placeholder="Name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact_input">
                                    <input type="email" placeholder="Email" name="email">
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="contact_input">
                                    <input type="text" placeholder="Subject" name="subject">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact_input">
                                    <textarea cols="3" rows="5" placeholder="Message" name="message"></textarea>
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
                        {!! $contact?->map_link !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
        GET IN TOUCH END
    ===========================-->
@endsection
