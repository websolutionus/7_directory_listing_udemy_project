@extends('admin.layouts.master')

@section('contents')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.packages.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Packages</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('admin.packages.index') }}">Packages</a></div>
                <div class="breadcrumb-item">Update</div>

            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Package <span class="text-danger">(For Unlimited Quantity Use -1)</span></h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.packages.update', $package->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Package Type <span class="text-danger">*</span></label>
                                            <select name="type" class="form-control">
                                                <option @selected($package->type === 'free') value="free">Free</option>
                                                <option @selected($package->type === 'paid') value="paid">Paid</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Package Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name" value="{{ $package->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Package Price <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="price" value="{{ $package->price }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Number of Days <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="number_of_days" value="{{ $package->number_of_days }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Number of Listing <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="num_of_listing" value="{{ $package->num_of_listing }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Number of Photos <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="num_of_photos" value="{{ $package->num_of_photos }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Number of Videos <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="num_of_video" value="{{ $package->num_of_video }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Number of Amenities <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="num_of_amenities" value="{{ $package->num_of_amenities }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Number of Featured Listings <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="num_of_featured_listing" value="{{ $package->num_of_featured_listing }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Show at Home <span class="text-danger">*</span></label>
                                            <select name="show_at_home" class="form-control">
                                                <option @selected($package->show_at_home === 0) value="0">No</option>
                                                <option @selected($package->show_at_home === 1) value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Status <span class="text-danger">*</span></label>
                                            <select name="status" class="form-control">
                                                <option @selected($package->status === 1) value="1">Active</option>
                                                <option @selected($package->status === 0) value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
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
