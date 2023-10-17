@extends('admin.layouts.master')

@section('contents')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.location.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Listing Schedule</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('admin.listing-schedule.index') }}">Listing Schedule</a></div>
                <div class="breadcrumb-item">Create</div>

            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Schedule</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.location.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="">Day<span class="text-danger">*</span></label>
                                    <select name="show_at_home" class="form-control select2" required>
                                        <option value="">Choose</option>
                                        @foreach (config('listing-schedule.days') as $day)
                                            <option value="{{ $day }}">{{ $day }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Start Time<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control timepicker">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">End Time<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control timepicker">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Status <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Create</button>
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
    <script>
        $('.timepicker').timepicker({
            timeFormat: 'h:mm p',
            interval: 60,
            minTime: '1',
            maxTime: '11:00pm',
            defaultTime: '11',
            startTime: '10:00',
            dynamic: false,
            dropdown: true,
            scrollbar: true
        });
    </script>
@endpush
