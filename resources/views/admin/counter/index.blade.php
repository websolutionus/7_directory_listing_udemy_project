@extends('admin.layouts.master')

@section('contents')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.dashboard.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Counter</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('admin.counter.index') }}">Counter</a></div>
                <div class="breadcrumb-item">Update</div>

            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Counter</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.counter.update', 1) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Background</label>
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" id="image-label">Choose File</label>
                                            <input type="file" name="background" id="image-upload" />
                                            <input type="hidden" name="old_background" value="{{ @$counter->background }}" />

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Counter One </label>
                                            <input type="text" class="form-control" name="counter_one" value="{{ @$counter->counter_one }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Counter Title One </label>
                                            <input type="text" class="form-control" name="counter_title_one" value="{{ @$counter->counter_title_one }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Counter Two </label>
                                            <input type="text" class="form-control" name="counter_two" value="{{ @$counter->counter_two }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Counter Title Two </label>
                                            <input type="text" class="form-control" name="counter_title_two" value="{{ @$counter->counter_title_two }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Counter Three </label>
                                            <input type="text" class="form-control" name="counter_three" value="{{ @$counter->counter_three }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Counter Title Three </label>
                                            <input type="text" class="form-control" name="counter_title_three" value="{{ @$counter->counter_title_three }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Counter Four </label>
                                            <input type="text" class="form-control" name="counter_four" value="{{ @$counter->counter_four }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Counter Title Four </label>
                                            <input type="text" class="form-control" name="counter_title_four" value="{{ @$counter->counter_title_four }}">
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

@push('scripts')
    <script>
       $(document).ready(function(){
        $('.image-preview').css({
                'background-image': 'url({{ asset(@$counter->background) }})',
                'background-size': 'cover',
                'background-position': 'center center'
        });
       })
    </script>
@endpush
