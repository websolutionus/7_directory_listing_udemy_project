function scrollToBootom() {
    $('.chat-content').scrollTop($('.chat-content').prop("scrollHeight"));
}
window.Echo.private('message.'+USER.id).listen(
    "Message",
    (e) => {
        console.log(e);
        let userId = $('.chat-content').attr("data-inbox-user")
        let listingId = $('.chat-content').attr("data-inbox-listing")
        if(userId == e.user.id && listingId == e.listing_id){
            let message = `
            <div class="chat-item chat-left" style="">
                <img class="chat-profile" src="${e.user.avatar}">
                <div class="chat-details">
                    <div class="chat-text">${e.message_data}</div>
                </div>
            </div>
            `
            $('.chat-content').append(message);
            scrollToBootom()
        }

        $('.profile_card').each(function(){
            let profileUserId = $(this).data('sender-id');
            let profileListingId = $(this).data('listing-id');

            if(profileUserId == e.user.id && profileListingId == e.listing_id) {
                $(this).find('.profile_img').addClass('new_message');
            }

        })
    }
)


window.Echo.join('online')
    .here((users) => {
        $.each(users, function(index, user) {
            $('.profile_card').each(function(){
                let profileUserId = $(this).data('sender-id');

                if(profileUserId == user.id) {

                    $(this).find('.user-status').html(`<div class="text-success text-small font-600-bold"><i class="fas fa-circle"></i> Online</div>`);
                }
            })
        })
    })
    .joining((user) => {
        $(`.profile_card[data-sender-id="${user.id}"]`).find('.user-status').html(`<div class="text-success text-small font-600-bold"><i class="fas fa-circle"></i> Online</div>`);
    })
    .leaving((user) => {
        $(`.profile_card[data-sender-id="${user.id}"]`).find('.user-status').html(`<div class=" text-small font-600-bold"><i class="fas fa-circle"></i> Offline</div>`);
    });
