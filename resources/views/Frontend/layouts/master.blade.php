<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>Listian</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/summernote.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <!-- <link rel="stylesheet" href="css/rtl.css"> -->
    @stack('styles')
</head>

<body>

    <!--==========================
        Navbar Start
    ===========================-->
    @include('frontend.layouts.navbar')
    <!--==========================
        Navbar End
    ===========================-->

    <!--==========================
        Contents Start
    ===========================-->
    @yield('contents')
    <!--==========================
        Contents End
    ===========================-->

    <!--==========================
        FOOTER PART START
    ===========================-->
    @include('frontend.layouts.footer')
    <!--==========================
        FOOTER PART END
    ===========================-->

    <!--==========================
        Listing Modal
    ===========================-->
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
        Listing Modal END
    ===========================-->


    <!--=============SCROLL BTN==============-->
    <div class="scroll_btn">
        <i class="fas fa-chevron-up"></i>
    </div>
    <!--=============SCROLL BTN==============-->


    <!--jquery library js-->
    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <!--bootstrap js-->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <!--font-awesome js-->
    <script src="{{ asset('frontend/js/Font-Awesome.js') }}"></script>
    <!--slick js-->
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <!--venobox js-->
    <script src="{{ asset('frontend/js/venobox.min.js') }}"></script>
    <!--counter js-->
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.countup.min.js') }}"></script>
    <!--nice select js-->
    <script src="{{ asset('frontend/js/select2.min.js') }}"></script>
    <!--isotope js-->
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <!--summer_note js-->
    <script src="{{ asset('frontend/js/summernote.min.js') }}"></script>
    <!--select js-->
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!--main/custom js-->
    <script src="{{ asset('frontend/js/main.js') }}"></script>

    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}")
            @endforeach
        @endif
    </script>

    <script>
        function showListingModal($id){
            $.ajax({
                method: 'GET',
                url: '',
                data: {},
                success: function(response) {

                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            })
        }
    </script>

    @stack('scripts')
</body>

</html>
