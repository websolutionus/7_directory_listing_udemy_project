@extends('admin.layouts.master')

@section('contents')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.dashboard.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Clear Database</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Clear Database</div>

            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Clear Database</h4>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-warning alert-has-icon">
                                <div class="alert-icon">
                                    <i class="fas fa-skull-crossbones"></i>
                                </div>
                                <div class="alert-body">
                                    <div class="alert-title">Danger</div>
                                    If you fire this action it will wipe your entire database.
                                </div>

                                <form class="mt-2 clear_db" action="{{ route('admin.about-us.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button class="btn btn-danger">Wipe Database</button>
                                </form>
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
        $(document).ready(function() {


        })
    </script>
@endpush
