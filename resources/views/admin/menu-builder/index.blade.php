@extends('admin.layouts.master')

@section('contents')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.dashboard.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Menu Builder</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Menu Builder</div>

            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Menu Builder</h4>
                        </div>
                        <div class="card-body">
                            {!! Menu::render() !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@push('scripts')
    {!! Menu::scripts() !!}
@endpush
