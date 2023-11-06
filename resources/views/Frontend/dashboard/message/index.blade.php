@extends('frontend.layouts.master')

@section('contents')
<section id="dashboard">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
            @include('frontend.dashboard.sidebar')
        </div>
        <div class="col-lg-9">
          <div class="dashboard_content">
            <div class="dashboard_message_area">
              <div class="row">
                <div class="col-xl-4">
                  <div class="tf__message_list">
                    <div class="nav flex-column nav-pills tf__massager_option" id="v-pills-tab" role="tablist"
                      aria-orientation="vertical">
                      @foreach ($receivers as $receiver)
                        <div class="nav-link profile_card" data-listing-id="{{ $receiver->listingProfile->id }}" data-receiver-id="{{ $receiver->receiverProfile->id }}" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <div class="tf__single_massage d-flex">
                            <div class="tf__single_massage_img">
                                <img  src="{{ asset($receiver->listingProfile->image) }}" alt="person" class="img-fluid w-100 profile_img">
                            </div>
                            <div class="tf__single_massage_text">
                                <h4 class="profile_name">{{ truncate($receiver->listingProfile->title, 15) }}</h4>
                                <p><i class="fas fa-crown"></i> {{ $receiver->receiverProfile->name }}</p>
                                <span class="tf__massage_time">30 min</span>
                            </div>
                            </div>
                        </div>
                      @endforeach

                    </div>
                  </div>
                </div>
                <div class="col-xl-8">
                  <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                      aria-labelledby="v-pills-home-tab" tabindex="0">
                      <div class="tf___single_chat">

                        <div class="tf__single_chat_top">
                          <div class="img">
                            <img id="chat_img" src="images/massage-4.png" alt="person" class="img-fluid w-100">
                          </div>
                          <div class="text">
                            <h4 id="chat_name">Charlene Reed</h4>
                            {{-- <p>active</p> --}}

                          </div>
                        </div>

                        <div class="tf__single_chat_body">

                          <div class="tf__chating">
                            <div class="tf__chating_img">
                              <img src="images/massage-4.png" alt="person" class="img-fluid w-100">
                            </div>
                            <div class="tf__chating_text">
                              <p>Cum id mundi admodum menandri, eum errem is any one
                                aperiri at. Ut quas facilis qui</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                          </div>
                          <div class="tf__chating tf_chat_right">
                            <div class="tf__chating_text">
                              <p>Please check your mail and come on meeting</p>
                              <span>15 Jun, 2023, 05:26 AM</span>
                            </div>
                            <div class="tf__chating_img">
                              <img src="images/massage-8.png" alt="person" class="img-fluid w-100">
                            </div>
                          </div>
                        </div>
                        <form class="tf__single_chat_bottom">
                          <input type="text" placeholder="Type a message...">
                          <button class="tf__massage_btn"><i class="fas fa-paper-plane"></i></button>
                        </form>
                      </div>
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
    function updateChatProfile(data) {
        let profileImage = data.find('.profile_img').attr('src');
        let profileName = data.find('.profile_name').text();
        $('#chat_img').attr('src', profileImage);
        $('#chat_name').text(profileName);
    }

    $(document).ready(function() {
        $('.profile_card').on('click', function() {
            // update profile
            updateChatProfile($(this))

            // fetch conversation
            let listingId = $(this).data('listing-id');
            let receiverId = $(this).data('receiver-id');

            $.ajax({
                method: 'GET',
                url: '{{ route("user.get-messages") }}',
                data: {
                    'listing_id': listingId,
                    'receiver_id': receiverId
                },
                beforeSend: function() {

                },
                success: function() {

                },
                error: function(xhr, status, error) {

                },
                complete: function() {

                }
            })
        })
    })

  </script>
@endpush
