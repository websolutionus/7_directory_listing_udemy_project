@extends('admin.layouts.master')

@section('contents')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.dashboard.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Listing Reviews</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Reviews</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Reviews</h4>

                        </div>
                        <div class="card-body">
                            {{ $dataTable->table() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}

    <script>
        $(document).ready(function() {
            $('body').on('change', '.update-status', function() {
                let id = $(this).data('id');

                $.ajax({
                    method: 'GET',
                    url: '{{ route("admin.listing-reviews.update", ":id") }}'.replace(":id", id),
                    data: {},
                    success: function (response) {
                        if(response.status === 'success') {
                            toastr.success(response.message);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.log(error);
                    }
                })
            })
        })
    </script>
@endpush
