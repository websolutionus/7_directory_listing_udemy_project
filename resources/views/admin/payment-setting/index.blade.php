@extends('admin.layouts.master')
@push('styles')
<style>
.select2.select2-container {
  width: 100% !important;
}
</style>
@endpush
@section('contents')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.dashboard.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Payment Settings</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="">Payment Settings</a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                          <h4>Settings</h4>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-12 col-sm-12 col-md-2">
                              <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true">Paypal Settings</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="false">Stripe Settings</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#contact4" role="tab" aria-controls="contact" aria-selected="false">Razorpay Settings</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-10">
                              <div class="tab-content no-padding" id="myTab2Content">

                                @include('admin.payment-setting.sections.paypal-settings')

                                @include('admin.payment-setting.sections.stripe-settings')

                                @include('admin.payment-setting.sections.razorpay-settings')

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

@push('scripts')
    <script>
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
