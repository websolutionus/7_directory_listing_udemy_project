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
                                @php
                                    $unseenMessage = \App\Models\Chat::where(['sender_id' => $sender->sender_id , 'receiver_id' => auth()->user()->id, 'listing_id' => $sender->listing_id, 'seen' => 0])->exists();

                                @endphp
                                    <li class="media profile_card" style="cursor: pointer"
                                        data-sender-id="{{ $sender->senderProfile->id }}"
                                        data-listing-id="{{ $sender->listingProfile->id }}">
                                        <img alt="image" class="mr-3 rounded-circle profile_img {{ $unseenMessage ? 'new_message' : '' }}" width="50"
                                            src="{{ asset($sender->senderProfile->avatar) }}">
                                        <div class="media-body">
                                            <div class="mt-0 mb-1 font-weight-bold profile_name">{{ $sender->senderProfile->name }}
                                                <small class="text-primary">( {{ $sender->listingProfile->title }} )</small>
                                            </div>
                                            <div class="user-status">
                                                <div class=" text-small font-600-bold"><i class="fas fa-circle"></i> Offline</div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-8">
                    <div class="card chat-box d-none" id="mychatbox" style="height: 70vh">
                        <div class="card-header">
                            <h4 id="chat_name">Chat with Rizal</h4>
                        </div>
                        <div class="card-body chat-content" data-inbox-user="" data-inbox-listing="">

                        </div>
                        <div class="card-footer chat-form">
                            <form id="chat-form" class="message-form">
                                @csrf
                                <input type="hidden" id="receiver_id" name="receiver_id" value="">
                                <input type="hidden" id="listing_id" name="listing_id" value="">
                                <input type="text" class="form-control" id="message" placeholder="Type a message" name="message">
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
    <script>
        const baseUri = "{{ asset('/') }}";
        const mainChatInbox = $('.chat-content');
        const loader = `
            <div class="d-flex justify-content-center align-items-center" style="height: 500px">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>`

        function updateChatProfile(data) {
            console.log(data)
            // let profileImage = data.find('.profile_img').attr('src');
            let profileName = data.find('.profile_name').text();
            // $('#chat_img').attr('src', profileImage);
            $('#chat_name').text(profileName);

            // set listing id and receiver id in message box
            let listingId = data.data('listing-id');
            let receiverId = data.data('sender-id');
            $('#listing_id').val(listingId);
            $('#receiver_id').val(receiverId);

            mainChatInbox.attr("data-inbox-user", receiverId)
            mainChatInbox.attr("data-inbox-listing", listingId)

        }

        function scrollToBootom() {
            mainChatInbox.scrollTop(mainChatInbox.prop("scrollHeight"));
        }

        function formatDateTime(dateTimeString) {
            const options = {
                year: 'numeric',
                month: 'short',
                day: '2-digit',
                hour: '2-digit',
                minute: '2-digit'
            }
            const formattedDateTime = new Intl.DateTimeFormat('en-US', options).format(new Date(dateTimeString));
            return formattedDateTime;
        }

        $('.profile_card').on('click', function() {
            // make inbox visible
            $('.chat-box').removeClass('d-none');
            $(this).find('.profile_img').removeClass('new_message');
            // update profile
            updateChatProfile($(this))

            // clear the chat inbox
            mainChatInbox.html("");

            // fetch conversation
            let listingId = $(this).data('listing-id');
            let senderId = $(this).data('sender-id');
            $.ajax({
                method: 'GET',
                url: '{{ route('admin.get-messages') }}',
                data: {
                    'listing_id': listingId,
                    'sender_id': senderId
                },
                beforeSend: function() {
                    mainChatInbox.html(loader);
                },
                success: function(response) {
                    mainChatInbox.html("");

                    $.each(response, function(index, value) {

                    let message = `
                    <div class="chat-item ${value.sender_id == USER.id ? 'chat-right' : 'chat-left'}" style="">
                        <img class="chat-profile" src="${baseUri + value.sender_profile.avatar}">
                        <div class="chat-details">
                            <div class="chat-text">${value.message}</div>
                            <div class="chat-time">${formatDateTime(value.created_at)}</div>
                        </div>
                    </div>
                    `
                        mainChatInbox.append(message);
                    })

                    scrollToBootom()
                },
                error: function(xhr, status, error) {

                }
            })
        })

        // send message
        $('.message-form').on('submit', function(e){
            e.preventDefault();
            let formData = $(this).serialize();
            let messageData = $('#message').val();

            var formSubmitting = false;

            if(formSubmitting || messageData === "") {
                return;
            }

            // set message in inbox

            let message = `
                <div class="chat-item chat-right" style="">
                    <img class="chat-profile" src="${USER.avatar}">
                    <div class="chat-details">
                        <div class="chat-text">${messageData}</div>
                        <div class="sending">sending...</div>
                    </div>
                </div>
                `
            mainChatInbox.append(message);

            scrollToBootom()

            // rest form
            $('.message-form').trigger('reset');

            $.ajax({
                method: 'POST',
                url: '{{ route("admin.send-message") }}',
                data: formData,
                beforeSend: function() {
                    formSubmitting = true;
                },
                success: function(response) {
                    if(response.status === 'success') {
                        $('.sending').remove();
                    }
                },
                error: function(xhr, status, error) {
                    console.log(xhr);
                    if(xhr.responseJSON.message) {
                        toastr.error(xhr.responseJSON.message);
                    }
                },
                complete: function() {
                    formSubmitting = false;
                }
            })
        })
    </script>
@endpush
