@extends('frontend.layouts.master')

@section('contents')
  <!--=============================
    DASHBOARD START
  ==============================-->
  <section id="dashboard">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
            @include('frontend.dashboard.sidebar')
        </div>
        <div class="col-lg-9">
          <div class="dashboard_content">
            <div class="my_listing p_xm_0">
              <div class="row">
                <div class="col-md-6">
                  <div class="visitor_rev_area">
                    <h4>visitors Reviews</h4>
                    <div class="visitor_rev_single">
                      <div class="visitor_rev_img">
                        <img src="images/listing_details_logo.png" alt="product" class="img-fluid w-100">
                      </div>
                      <div class="visitor_rev_text">
                        <a class="title" href="#">Ristorante Del Arte <span>Oct 17, 2021</span></a>
                        <p>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </p>
                        <span class="small_text">Lorem ipsum dolor sit amet.</span>
                        <ul>
                          <li><a href="dsahboard_review_edit.html"><i class="fal fa-edit"></i> edit</a></li>
                          <li><a href="#"><i class="fal fa-trash-alt"></i> delete</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=============================
    DASHBOARD START
  ==============================-->
@endsection
