@extends('frontend.layouts.master')

@section('contents')
<section id="dashboard">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
            @include('frontend.dashboard.sidebar')
        </div>
        <div class="col-lg-9">
          <div class="dashboard_content">
            <div class="manage_dasboard">
              <div class="row">
                <div class="col-xl-6 col-12 col-sm-6 col-lg-6 col-xxl-3">
                  <div class="manage_dashboard_single">
                    <i class="far fa-star"></i>
                    <h3>116</h3>
                    <p>Total Reviews</p>
                  </div>
                </div>
                <div class="col-xl-6 col-12 col-sm-6 col-lg-6 col-xxl-3">
                  <div class="manage_dashboard_single orange">
                    <i class="fas fa-list-ul"></i>
                    <h3>21</h3>
                    <p>active listing</p>
                  </div>
                </div>
                <div class="col-xl-6 col-12 col-sm-6 col-lg-6 col-xxl-3">
                  <div class="manage_dashboard_single green">
                    <i class="far fa-heart"></i>
                    <h3>35</h3>
                    <p>wishlist</p>
                  </div>
                </div>
                <div class="col-xl-6 col-12 col-sm-6 col-lg-6 col-xxl-3">
                  <div class="manage_dashboard_single red">
                    <i class="fal fa-comment-alt-dots"></i>
                    <h3>120</h3>
                    <p>message</p>
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="active_package">
                    <h4>Active Package</h4>
                    <div class="table-responsive">
                      <table class="table dashboard_table">
                        <tbody>
                          <tr>
                            <td class="active_left">Package name</td>
                            <td class="package_right">Free</td>
                          </tr>
                          <tr>
                            <td class="active_left">Price</td>
                            <td class="package_right">$50</td>
                          </tr>
                          <tr>
                            <td class="active_left">Purchase Date</td>
                            <td class="package_right">15 October, 2021</td>
                          </tr>
                          <tr>
                            <td class="active_left">Expired Date</td>
                            <td class="package_right">14 November, 2021</td>
                          </tr>
                          <tr>
                            <td class="active_left">Package name</td>
                            <td class="package_right">Free</td>
                          </tr>
                          <tr>
                            <td class="active_left">Maximum Listing </td>
                            <td class="package_right">10</td>
                          </tr>
                          <tr>
                            <td class="active_left">Maximum Aminities</td>
                            <td class="package_right">5</td>
                          </tr>
                          <tr>
                            <td class="active_left">Maximum Photo</td>
                            <td class="package_right">5</td>
                          </tr>
                          <tr>
                            <td class="active_left">Maximum Video</td>
                            <td class="package_right">10</td>
                          </tr>
                          <tr>
                            <td class="active_left">Featured Listing Available</td>
                            <td class="package_right">no</td>
                          </tr>
                        </tbody>
                      </table>
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
@endsection
