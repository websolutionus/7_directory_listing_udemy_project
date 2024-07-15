@extends('admin.layouts.master')

@section('contents')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.dashboard.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Section Titles</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Section Title</div>

            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Section Title</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.section-title.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <h6>Our Feature:</h6>
                                <div class="form-group">
                                    <label for="">Our Feature Title <span class="text-danger"></span></label>
                                    <input type="text" class="form-control" name="our_feature_title" value="{{ $title?->our_feature_title }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Our Feature Sub Title <span class="text-danger"></span></label>
                                    <textarea name="our_feature_sub_title" class="form-control">{{ $title?->our_feature_sub_title }}</textarea>
                                </div>

                                <hr>

                                <h6>Our Categoires:</h6>
                                <div class="form-group">
                                    <label for="">Our Categories Title <span class="text-danger"></span></label>
                                    <input type="text" class="form-control" name="our_categories_title" value="{{ $title?->our_categories_title }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Our Categories Sub Title <span class="text-danger"></span></label>
                                    <textarea name="our_categories_sub_title" class="form-control">{{ $title?->our_categories_sub_title }}</textarea>
                                </div>

                                <hr>

                                <h6>Our Location :</h6>
                                <div class="form-group">
                                    <label for="">Our Location Title <span class="text-danger"></span></label>
                                    <input type="text" class="form-control" name="our_location_title" value="{{ $title?->our_location_title }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Our Location Sub Title <span class="text-danger"></span></label>
                                    <textarea name="our_location_sub_title" class="form-control">{{ $title?->our_location_sub_title }}</textarea>
                                </div>


                                <hr>

                                <h6>Our Featured Listing :</h6>
                                <div class="form-group">
                                    <label for="">Our Featured Listing Title <span class="text-danger"></span></label>
                                    <input type="text" class="form-control" name="our_featured_listing_title" value="{{ $title?->our_featured_listing_title }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Our Featured Listing Sub Title <span class="text-danger"></span></label>
                                    <textarea name="our_featured_listing_sub_title" class="form-control">{{ $title?->our_featured_listing_sub_title }}</textarea>
                                </div>


                                <hr>

                                <h6>Our Pricing :</h6>
                                <div class="form-group">
                                    <label for="">Our Pricing Title <span class="text-danger"></span></label>
                                    <input type="text" class="form-control" name="our_our_pricing_title" value="{{ $title?->our_our_pricing_title }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Our Pricing Sub Title <span class="text-danger"></span></label>
                                    <textarea name="our_our_pricing_sub_title" class="form-control">{{ $title?->our_our_pricing_sub_title }}</textarea>
                                </div>

                                <hr>

                                <h6>Our Testimonial :</h6>
                                <div class="form-group">
                                    <label for="">Our Testimonial Title <span class="text-danger"></span></label>
                                    <input type="text" class="form-control" name="our_testimonial_title" value="{{ $title?->our_testimonial_title }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Our Testimonial Sub Title <span class="text-danger"></span></label>
                                    <textarea name="our_testimonial_sub_title" class="form-control">{{ $title?->our_testimonial_sub_title }}</textarea>
                                </div>

                                <hr>

                                <h6>Our Blog :</h6>
                                <div class="form-group">
                                    <label for="">Our Blog Title <span class="text-danger"></span></label>
                                    <input type="text" class="form-control" name="our_blog_title" value="{{ $title?->our_blog_title }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Our Blog Sub Title <span class="text-danger"></span></label>
                                    <textarea name="our_blog_sub_title" class="form-control">{{ $title?->our_blog_sub_title }}</textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
