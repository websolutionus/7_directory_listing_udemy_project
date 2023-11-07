@extends('admin.layouts.master')

@section('contents')
<section class="section">
    <div class="section-header">
      <h1>Messages</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Messages</div>
      </div>
    </div>

    <div class="section-body">

      <div class="row align-items-center justify-content-center">
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card" style="height: 70vh">
            <div class="card-header">
              <h4>Who's Online?</h4>
            </div>
            <div class="card-body">
              <ul class="list-unstyled list-unstyled-border">
                <li class="media">
                  <img alt="image" class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-1.png">
                  <div class="media-body">
                    <div class="mt-0 mb-1 font-weight-bold">Hasan Basri</div>
                    <div class="text-success text-small font-600-bold"><i class="fas fa-circle"></i> Online</div>
                  </div>
                </li>
                <li class="media">
                  <img alt="image" class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-2.png">
                  <div class="media-body">
                    <div class="mt-0 mb-1 font-weight-bold">Bagus Dwi Cahya</div>
                    <div class="text-small font-weight-600 text-muted"><i class="fas fa-circle"></i> Offline</div>
                  </div>
                </li>
                <li class="media">
                  <img alt="image" class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-3.png">
                  <div class="media-body">
                    <div class="mt-0 mb-1 font-weight-bold">Wildan Ahdian</div>
                    <div class="text-small font-weight-600 text-success"><i class="fas fa-circle"></i> Online</div>
                  </div>
                </li>
                <li class="media">
                  <img alt="image" class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-4.png">
                  <div class="media-body">
                    <div class="mt-0 mb-1 font-weight-bold">Rizal Fakhri</div>
                    <div class="text-small font-weight-600 text-success"><i class="fas fa-circle"></i> Online</div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-8">
          <div class="card chat-box" id="mychatbox" style="height: 70vh">
            <div class="card-header">
              <h4>Chat with Rizal</h4>
            </div>
            <div class="card-body chat-content">
            </div>
            <div class="card-footer chat-form">
              <form id="chat-form">
                <input type="text" class="form-control" placeholder="Type a message">
                <button class="btn btn-primary">
                  <i class="far fa-paper-plane"></i>
                </button>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection

@push('scripts')

@endpush
