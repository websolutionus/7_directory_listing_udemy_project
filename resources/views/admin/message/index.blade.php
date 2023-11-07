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
                @foreach ($senders as $sender)
                <li class="media" style="cursor: pointer">
                  <img alt="image" class="mr-3 rounded-circle" width="50" src="{{ asset($sender->senderProfile->avatar) }}">
                  <div class="media-body">
                    <div class="mt-0 mb-1 font-weight-bold">{{ $sender->senderProfile->name }} <small class="text-primary">( {{ $sender->listingProfile->title }} )</small></div>
                    <div class="text-success text-small font-600-bold"><i class="fas fa-circle"></i> Online</div>
                  </div>
                </li>
                @endforeach

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
