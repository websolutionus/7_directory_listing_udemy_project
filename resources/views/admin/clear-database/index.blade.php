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
                                    <button class="btn btn-danger" type="submit">Wipe Database</button>
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
        $('.clear_db').on('submit', function(e) {
            e.preventDefault();
            let url = "{{ route('admin.clear-database') }}";

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        method: 'POST',
                        url: url,
                        data: {_token: "{{ csrf_token() }}"},
                        success: function(response) {
                            if(response.status === 'success'){
                                Swal.fire(
                                    'Deleted!',
                                    response.message,
                                    'success'
                                )
                                window.location.reload();
                            }else if (response.status === 'error'){
                                Swal.fire(
                                    'Somthing wen\'t wrong!',
                                    response.message,
                                    'error'
                                )
                            }
                        },
                        error: function(xhr, status, error){
                            console.log(error);
                        }

                    })

                }
            })

        })
    </script>
@endpush
