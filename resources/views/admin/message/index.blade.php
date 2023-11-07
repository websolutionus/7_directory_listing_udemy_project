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
                                    <li class="media profile_card" style="cursor: pointer"
                                        data-sender-id="{{ $sender->senderProfile->id }}"
                                        data-listing-id="{{ $sender->listingProfile->id }}">
                                        <img alt="image" class="mr-3 rounded-circle" width="50"
                                            src="{{ asset($sender->senderProfile->avatar) }}">
                                        <div class="media-body">
                                            <div class="mt-0 mb-1 font-weight-bold">{{ $sender->senderProfile->name }}
                                                <small class="text-primary">( {{ $sender->listingProfile->title }} )</small>
                                            </div>
                                            <div class="text-success text-small font-600-bold"><i class="fas fa-circle"></i>
                                                Online</div>
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
                            <div class="chat-item chat-left" style="">
                                <img src="../dist/img/avatar/avatar-1.png">
                                <div class="chat-details">
                                    <div class="chat-text">You wanna know?</div>
                                    <div class="chat-time">12:23</div>
                                </div>
                            </div>
                            <div class="chat-item chat-right" style=""><img src="../dist/img/avatar/avatar-2.png">
                                <div class="chat-details">
                                    <div class="chat-text">Wat?!</div>
                                    <div class="chat-time">12:23</div>
                                </div>
                            </div>
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
    <script>
        const baseUri = "{{ asset('/') }}";
        const mainChatInbox = $('.chat-content');
        const loader = `
            <div class="d-flex justify-content-center align-items-center" style="height: 500px">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>`

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
            // $('.tf___single_chat').removeClass('d-none');
            // update profile
            // updateChatProfile($(this))

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
                    <div class="tf__chating tf_chat_right">
                        <div class="tf__chating_text">
                          <p>${value.message}</p>
                          <span>${formatDateTime(value.created_at)}</span>
                        </div>
                        <div class="tf__chating_img">
                          <img src="${baseUri + value.sender_profile.avatar}" alt="person" class="img-fluid w-100">
                        </div>
                    </div>`
                        mainChatInbox.append(message);
                    })

                    scrollToBootom()
                },
                error: function(xhr, status, error) {

                }
            })
        })
    </script>
@endpush
