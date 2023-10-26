@extends('frontend.layouts.master')

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<style>
    label {
        margin-top: 15px;
    }
</style>
@endpush

@section('contents')
    <section id="dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('frontend.dashboard.sidebar')
                </div>
                <div class="col-lg-9">
                    <div class="dashboard_content">
                        <div class="my_listing">
                            <h4>Create Listing</h4>
                            <form action="{{ route('user.listing.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Image <span class="text-danger">*</span></label>
                                            <div id="image-preview" class="image-preview">
                                                <label for="image-upload" id="image-label">Choose File</label>
                                                <input type="file" name="image" id="image-upload" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Thumbnail Image <span class="text-danger">*</span></label>
                                            <div id="image-preview-2" class="image-preview">
                                                <label for="image-upload-2" id="image-label-2">Choose File</label>
                                                <input type="file" name="thumbnail_image" id="image-upload-2" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" required>
                                    <input type="hidden" name="listing" value="0">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">category <span class="text-danger">*</span></label>
                                            <select class="form-control" name="category" required>
                                                <option value="">Select</option>
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Location <span class="text-danger">*</span></label>
                                            <select class="form-control" name="location" required>
                                                <option value="">Select</option>
                                                @foreach ($locations as $location)
                                                <option value="{{ $location->id }}">{{ $location->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="address" required>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Phone <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Email <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="email" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Website <span class="text-danger"></span></label>
                                            <input type="text" class="form-control" name="website">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Facebook Link <span class="text-danger"></span></label>
                                            <input type="text" class="form-control" name="facebook_link">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">X Link <span class="text-danger"></span></label>
                                            <input type="text" class="form-control" name="x_link">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Linkedin Link <span class="text-danger"></span></label>
                                            <input type="text" class="form-control" name="linkedin_link">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Whatsapp Link <span class="text-danger"></span></label>
                                            <input type="text" class="form-control" name="whatsapp_link">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Attacement <span class="text-danger"></span></label>
                                            <input type="file" class="form-control" name="attachment">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    @if ($subscription->package->num_of_amenities === -1)
                                    <label>Amenities <code>( Unlimited )</code></label>
                                    @else
                                    <label>Amenities <code>( Maximum : {{ $subscription->package->num_of_amenities }} entry )</code></label>
                                    @endif


                                    <select class="form-control select2" multiple="" name="amenities[]">
                                        @foreach ($amenities as $amenity)
                                        <option value="{{ $amenity->id }}" >{{ $amenity->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Description <span class="text-danger">*</span></label>
                                    <textarea name="description" class="summernote" ></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Google Map Embed Code <span class="text-danger"></span></label>
                                    <textarea name="google_map_embed_code" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Seo Title <span class="text-danger"></span></label>
                                    <input type="text" class="form-control" name="seo_title">
                                </div>

                                <div class="form-group">
                                    <label for="">Seo Description <span class="text-danger"></span></label>
                                    <textarea name="seo_description" class="form-control"></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Status <span class="text-danger">*</span></label>
                                            <select name="status" class="form-control" required>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Is Featured <span class="text-danger"></span></label>
                                            <select name="is_featured" class="form-control" required>
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12">
                                    <button type="submit" class="read_btn mt-4">Create</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script src="{{ asset('admin/assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
<script src="{{ asset('admin/assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });

    $('.select2').select2();


    $.uploadPreview({
        input_field: "#image-upload", // Default: .image-upload
        preview_box: "#image-preview", // Default: .image-preview
        label_field: "#image-label", // Default: .image-label
        label_default: "Choose File", // Default: Choose File
        label_selected: "Change File", // Default: Change File
        no_label: false, // Default: false
        success_callback: null // Default: null
    });

    $.uploadPreview({
        input_field: "#image-upload-2", // Default: .image-upload
        preview_box: "#image-preview-2", // Default: .image-preview
        label_field: "#image-label-2", // Default: .image-label
        label_default: "Choose File", // Default: Choose File
        label_selected: "Change File", // Default: Change File
        no_label: false, // Default: false
        success_callback: null // Default: null
    });
</script>
@endpush
