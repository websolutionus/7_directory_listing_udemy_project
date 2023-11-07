window.Echo.private('message.'+USER.id).listen(
    "Message",
    (e) => {
        console.log(e);
    }
)
