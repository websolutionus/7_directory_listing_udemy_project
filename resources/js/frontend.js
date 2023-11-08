function scrollToBootom() {
    $('.main_chat_inbox').scrollTop($('.main_chat_inbox').prop("scrollHeight"));
}

window.Echo.private('message.'+USER.id).listen(
    "Message",
    (e) => {
        console.log(e);
        var message = `
            <div class="tf__chating">
                <div class="tf__chating_img">
                    <img src="${e.user.avatar}" alt="person" class="img-fluid w-100 rounded-circle">
                </div>
                <div class="tf__chating_text">
                    <p>${e.message_data}</p>
                </div>
            </div>
            `
            $('.main_chat_inbox').append(message);
            scrollToBootom()
    }
)
