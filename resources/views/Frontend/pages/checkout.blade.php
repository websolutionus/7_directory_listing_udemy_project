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
                        <h4>Checkout</h4>
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}"> Home </a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
        PAYMENT PAGE START
    ===========================-->
    <section id="wsus__custom_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="wsus__payment_area">
                        <div class="row">
                            @if (config('payment.paypal_status') === 'active')
                            <div class="col-lg-3 col-6 col-sm-4">
                                <a class="wsus__single_payment"
                                    href="{{ route('paypal.payment') }}">
                                    <img src="{{ asset('default/paypal.png') }}" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            @endif

                            @if (config('payment.stripe_status') === 'active')
                            <div class="col-lg-3 col-6 col-sm-4">
                                <a class="wsus__single_payment" href="{{ route('stripe.payment') }}">
                                    <img src="{{ asset('default/stripe.png') }}" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            @endif
                            @if (config('payment.razorpay_status') === 'active')
                            <div class="col-lg-3 col-6 col-sm-4">
                                <a class="wsus__single_payment" href="{{ route('razorpay.redirect') }}">
                                    <img src="{{ asset('default/razorpay.png') }}" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-7">
                    <div class="member_price">
                        <h4>{{ $package->name }}</h4>
                        <h5>{{ currencyPosition($package->price) }}
                            @if ($package->number_of_days === -1)
                            <span>/ Lifetime</span>
                            @else
                            <span>/ {{ $package->number_of_days }} Days</span>
                            @endif
                        </h5>
                        @if ($package->num_of_listing === -1)
                            <p>Unlimited Listings Submition</p>
                        @else
                            <p>{{ $package->num_of_listing }} Listings Submition</p>
                        @endif

                        @if ($package->num_of_amenities === -1)
                            <p>Unlimited Listing Aminities</p>
                        @else
                            <p>{{ $package->num_of_amenities }} Listing Aminities</p>
                        @endif

                        @if ($package->num_of_photos === -1)
                            <p>Unlimited Listing Photos</p>
                        @else
                            <p>{{ $package->num_of_photos }} Listing Photos</p>
                        @endif

                        @if ($package->num_of_video === -1)
                            <p>Unlimited Listing Videos</p>
                        @else
                            <p>{{ $package->num_of_video }} Listing Videos</p>
                        @endif

                        @if ($package->num_of_featured_listing === -1)
                        <p>Unlimited Featured Listing</p>
                        @else
                            <p>{{ $package->num_of_featured_listing }} Featured Listing</p>
                        @endif

                        <a href="{{ route('checkout.index', $package->id) }}">Order now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="wsus__payment_modal">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="wsus__pay_modal_info">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, tempora cum optio
                                cumque rerum dolor impedit exercitationem? Eveniet suscipit repellat, quae natus hic
                                assumenda.</p>
                            <ul>
                                <li>Natus hic assumenda consequatur excepturi ducimu.</li>
                                <li>Cumque rerum dolor impedit exercitationem Eveniet.</li>
                                <li>Dolor sit amet consectetur adipisicing elit tempora cum </li>
                            </ul>
                            <form>
                                <input type="text" placeholder="Enteer Something">
                                <input type="text" placeholder="Enteer Something">
                                <textarea rows="4" placeholder="Enter Something"></textarea>
                                <div class="wsus__payment_btn_area">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==========================
        CUSTOM PAGE END
    ===========================-->
@endsection
