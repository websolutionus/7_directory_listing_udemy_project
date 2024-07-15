@extends('admin.layouts.master')

@section('contents')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.dashboard.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Role</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Role</div>

            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Role</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.role.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="">Role Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="role_name" value="">
                                </div>

                                <hr>
                                @foreach ($permissions as $groupName => $permission)
                                <div class="form-group">
                                    <h6>{{ $groupName }} Permissions</h6>
                                    <div class="row">
                                        @foreach ($permission as $item)
                                        <div class="col-md-2">
                                            <label class="custom-switch mt-2">
                                                <input type="checkbox" name="permissions[]" class="custom-switch-input" value="{{ $item->name }}">
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description">{{ $item->name }}</span>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                    <hr>
                                </div>
                                @endforeach

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

    </script>
@endpush
