// Marcelo Dev Test
var appId =  App.facebook.appId;

/**
 * Boilerplate code from https://developers.facebook.com/docs/php/howto/example_access_token_from_javascript
 */
window.fbAsyncInit = function() {
    FB.init({
        appId: appId,
        cookie: true, // This is important, it's not enabled by default
        version: 'v2.2'
    });
};

(function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

/**
 * Handling login
 */
$(document).ready(function () {
    $('body').on('click', '[data-facebook-login]', function (e) {
        e.preventDefault();

        FB.login(function(response) {
            if (response.authResponse) {
                $.ajax({
                    type: 'post',
                    url: '/facebook-login.php',
                    data: { data:  response },
                    success: function (response) {
                        // force redirect
                        window.location.href = "/";
                    }
                });
            } else {
                console.log(response);
                console.log('User cancelled login or did not fully authorize.');
            }
        });
    });
});
