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
    }
)
