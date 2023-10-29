@extends('admin.layouts.master')

@section('contents')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.location.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Settings</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="">Settings</a></div>
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
                                  <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true">General Settings</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#contact4" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-10">
                              <div class="tab-content no-padding" id="myTab2Content">
                                <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">
                                  <div class="card border">
                                    <div class="card-body">
                                        <form action="{{ route("admin.general-settings.update") }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Site Name</label>
                                                        <input type="text" class="form-control" name="site_name" value="{{ config('settings.site_name') }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Site Email</label>
                                                        <input type="text" class="form-control" name="site_email" value="{{ config('settings.site_email') }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Site Phone</label>
                                                        <input type="text" class="form-control" name="site_phone" value="{{ config('settings.site_phone') }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Site Time Zone</label>
                                                        <select name="site_timezone" class="form-control select2">
                                                            <option value="">Select</option>
                                                            @foreach (config('time-zone') as $key => $timezone)
                                                            <option @selected($key === config('settings.site_timezone')) value="{{ $key }}">{{ $key }} - {{ $timezone }}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Site Default Currency</label>
                                                        <Select name="site_default_currency" class="form-control select2">
                                                            <option value="">Select</option>
                                                            @foreach (config('currencies.currency_list') as $key => $currency)
                                                                <option @selected($currency === config('settings.site_default_currency')) value="{{ $currency }}">{{ $key }} ({{ $currency }})</option>
                                                            @endforeach

                                                        </Select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Site Currency Icon</label>
                                                        <input type="text" class="form-control" name="site_currency_icon" value="{{ config('settings.site_currency_icon') }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Site Currency Possition</label>
                                                        <Select name="site_currency_position" class="form-control">
                                                            <option @selected(config('settings.site_currency_position') === 'left') value="left" >Left</option>
                                                            <option @selected(config('settings.site_currency_position') === 'right') value="right">Right</option>
                                                        </Select>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">
                                  Sed sed metus vel lacus hendrerit tempus. Sed efficitur velit tortor, ac efficitur est lobortis quis. Nullam lacinia metus erat, sed fermentum justo rutrum ultrices. Proin quis iaculis tellus. Etiam ac vehicula eros, pharetra consectetur dui. Aliquam convallis neque eget tellus efficitur, eget maximus massa imperdiet. Morbi a mattis velit. Donec hendrerit venenatis justo, eget scelerisque tellus pharetra a.
                                </div>
                                <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact-tab4">
                                  Vestibulum imperdiet odio sed neque ultricies, ut dapibus mi maximus. Proin ligula massa, gravida in lacinia efficitur, hendrerit eget mauris. Pellentesque fermentum, sem interdum molestie finibus, nulla diam varius leo, nec varius lectus elit id dolor. Nam malesuada orci non ornare vulputate. Ut ut sollicitudin magna. Vestibulum eget ligula ut ipsum venenatis ultrices. Proin bibendum bibendum augue ut luctus.
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
