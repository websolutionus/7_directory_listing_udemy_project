@php
    $footerInfo = \App\Models\FooterInfo::first();
@endphp
<footer>
    <div class="container">
        <div class="row text-white">
            <div class="col-xl-3 col-sm-12 col-md-6 col-lg-6">
                <div class="footer_text">
                    <h3>About Us</h3>
                    <p>{!! $footerInfo?->short_description !!}</p>
                    <ul class="footer_icon">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-sm-6 col-md-6 col-lg-6">
                <div class="footer_text">
                    <h3>My Account</h3>
                    <ul class="footer_link">
                        @foreach (Menu::getByName('Footer Menu One') as $footerMenuOne)
                        <li><a href="{{ $footerMenuOne['link'] }}"><i class="far fa-chevron-double-right"></i> {{ $footerMenuOne['label'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-sm-6 col-md-3 col-lg-3">
                <div class="footer_text">
                    <h3>Helpful Links</h3>
                    <ul class="footer_link">
                        @foreach (Menu::getByName('Footer Menu Two') as $footerMenuOne)
                        <li><a href="{{ $footerMenuOne['link'] }}"><i class="far fa-chevron-double-right"></i> {{ $footerMenuOne['label'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-sm-6 col-md-3 col-lg-3">
                <div class="footer_text">
                    <h3>Information</h3>
                    <ul class="footer_link">
                        @foreach (Menu::getByName('Footer Menu Three') as $footerMenuOne)
                        <li><a href="{{ $footerMenuOne['link'] }}"><i class="far fa-chevron-double-right"></i> {{ $footerMenuOne['label'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-md-6 col-lg-6">
                <div class="footer_text footer_contact">
                    <h3>Information</h3>
                    <ul class="footer_link">
                        <li>
                            <p><i class="far fa-map-marker-alt"></i> {{ $footerInfo?->address }}</p>
                        </li>
                        <li><a href="#"><a href="mailto:{{ $footerInfo?->email }}"><i class="fal fa-envelope"></i>
                            {{ $footerInfo?->email }}</a></li>
                        <li><a href="#"><a href="callto:{{ $footerInfo?->phone }}"><i class="fal fa-phone-alt"></i>
                            {{ $footerInfo?->phone }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-5">
                    <p>&#64; 2021 <a href="#">DB.Card</a> All Rights Reserved.</p>
                </div>
                <div class="col-xl-6 col-md-7">
                    
                </div>
            </div>
        </div>
    </div>
</footer>
