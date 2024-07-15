@extends('admin.layouts.master')

@section('contents')
<section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-list"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Listings</h4>
            </div>
            <div class="card-body">
              {{ $totalListingCount }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="fas fa-list"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Pending Listing</h4>
            </div>
            <div class="card-body">
              {{ $pendingListingCount }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-cart-arrow-down"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Orders</h4>
            </div>
            <div class="card-body">
              {{ $orderCount }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-circle"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Claims</h4>
            </div>
            <div class="card-body">
              {{ $claimCount }}
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-list-ol"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Listing Categories</h4>
            </div>
            <div class="card-body">
              {{ $listingCategoryCount }}
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-info">
            <i class="fas fa-location-arrow"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Locations</h4>
            </div>
            <div class="card-body">
              {{ $locationCount }}
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fab fa-blogger-b"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Blogs</h4>
            </div>
            <div class="card-body">
              {{ $blogCount }}
            </div>
          </div>
        </div>
      </div>


      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="fab fa-blogger-b"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Blog Categories</h4>
            </div>
            <div class="card-body">
              {{ $blogCategoryCount }}
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-user-shield"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Admins</h4>
            </div>
            <div class="card-body">
              {{ $adminCount }}
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-fingerprint"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Permissions</h4>
            </div>
            <div class="card-body">
              {{ $permissionCount }}
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-info">
            <i class="fas fa-crown"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Roles</h4>
            </div>
            <div class="card-body">
              {{ $roleCount }}
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-star"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Testimonials</h4>
            </div>
            <div class="card-body">
              {{ $totalTestimonials }}
            </div>
          </div>
        </div>
      </div>






    </div>

  </section>
@endsection
