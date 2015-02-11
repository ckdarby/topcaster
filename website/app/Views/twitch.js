$(function() {
    // Initialize. If we are already logged in, there is no
    // need for the connect button
    Twitch.init({clientId: '9q00i6u1lwn13qp3ounrqya0bcl4zre'}, function(error, status) {
        console.log(status);
        if (status.authenticated) {

        }
    });


    $('.twitch-connect').click(function() {
        console.log('kappa');
        Twitch.login({
            scope: ['user_read', 'channel_read']
        });
    })

    $('a[href="#logout"]').click(function() {
        console.log('test');
        event.preventDefault();
        Twitch.logout(function(error) {
            location.reload(true);
        });
    });
});