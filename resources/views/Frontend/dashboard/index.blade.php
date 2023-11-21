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
                    <h3>{{ $reviewsCount }}</h3>
                    <p>Total Reviews</p>
                  </div>
                </div>
                <div class="col-xl-6 col-12 col-sm-6 col-lg-6 col-xxl-3">
                  <div class="manage_dashboard_single green">
                    <i class="fas fa-list-ul"></i>
                    <h3>{{ $activeListingCount }}</h3>
                    <p>active listing</p>
                  </div>
                </div>
                <div class="col-xl-6 col-12 col-sm-6 col-lg-6 col-xxl-3">
                  <div class="manage_dashboard_single orange">
                    <i class="far fa-heart"></i>
                    <h3>{{ $pendingListingCount }}</h3>
                    <p>Pending Listing</p>
                  </div>
                </div>
                <div class="col-xl-6 col-12 col-sm-6 col-lg-6 col-xxl-3">
                  <div class="manage_dashboard_single red">
                    <i class="fal fa-comment-alt-dots"></i>
                    <h3>{{ $listingCount }}</h3>
                    <p>Total Listings</p>
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="active_package">
                    <h4>Active Package</h4>
                    <div class="table-responsive">
                      <table class="table dashboard_table">
                        @if ($subscription?->package)
                        <tbody>
                          <tr>
                            <td class="active_left">Package name</td>
                            <td class="package_right">{{ $subscription?->package?->name }}</td>
                          </tr>
                          <tr>
                            <td class="active_left">Price</td>
                            <td class="package_right">{{ currencyPosition($subscription->package->price) }}</td>
                          </tr>
                          <tr>
                            <td class="active_left">Purchase Date</td>
                            <td class="package_right">{{ date('d F Y', strtotime($subscription->purchase_date)) }}</td>
                          </tr>
                          <tr>
                            <td class="active_left">Expired Date</td>
                            <td class="package_right">{{ date('d F Y', strtotime($subscription->expire_date)) }}</td>
                          </tr>
                          <tr>
                            <td class="active_left">Maximum Listing </td>
                            <td class="package_right">
                                @if ($subscription->package->num_of_listing === -1)
                                Unlimited
                                @else
                                {{ $subscription->package->num_of_listing }}
                                @endif
                            </td>
                          </tr>
                          <tr>
                            <td class="active_left">Maximum Aminities</td>
                            <td class="package_right">
                                @if ($subscription->package->num_of_amenities === -1)
                                Unlimited
                                @else
                                {{ $subscription->package->num_of_amenities }}
                                @endif
                            </td>
                          </tr>
                          <tr>
                            <td class="active_left">Maximum Photo</td>
                            <td class="package_right">

                                @if ($subscription->package->num_of_photos === -1)
                                Unlimited
                                @else
                                {{ $subscription->package->num_of_photos }}
                                @endif

                            </td>
                          </tr>
                          <tr>
                            <td class="active_left">Maximum Video</td>
                            <td class="package_right">

                                @if ($subscription->package->num_of_video === -1)
                                Unlimited
                                @else
                                {{ $subscription->package->num_of_video }}
                                @endif
                            </td>

                          </tr>
                          <tr>
                            <td class="active_left">Featured Listing Available</td>
                            <td class="package_right">
                                @if ($subscription->package->num_of_video === -1)
                                Unlimited
                                @else
                                {{ $subscription->package->num_of_featured_listing }}
                                @endif
                            </td>

                          </tr>
                        </tbody>
                        @else
                        <tbody>
                            <tr>
                                <td class="w-100">No Package Found!</td>
                            </tr>
                        </tbody>
                        @endif
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
