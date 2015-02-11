$(function() {

    //Initialize
    Twitch.init({clientId: '9q00i6u1lwn13qp3ounrqya0bcl4zre'}, function(error, status) {
        if (status.authenticated) {
            $('.loggedin').show();
            $('.loggedout').remove();
        } else {
            $('.loggedout').show();
        }
    });

    // Login
    $('.twitch-connect').click(function() {
        Twitch.login({
            scope: ['user_read', 'channel_read']
        });
    })

    // Logout
    $('a[href="#logout"]').click(function() {
        event.preventDefault();
        console.log('logout');
        Twitch.logout(function(error) {
            window.location.href = "/";
        });
    });

});