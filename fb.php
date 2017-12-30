<html>
    <head>
        <title>My Application</title>
        <style type="text/css">
            div { padding: 10px; }
        </style>
        <meta charset="UTF-8">
    </head>
    <body>
        <div id="fb-root"></div>
        <script type="text/javascript">
          var fbAppId = 'myAppId';
          var objectToLike = 'http://techcrunch.com/2013/02/06/facebook-launches-developers-live-video-channel-to-keep-its-developer-ecosystem-up-to-date/';

          if (fbAppId === 'replace me') {
            alert('Please set the fbAppId in the sample.');
          }

          window.fbAsyncInit = function() {
            FB.init({
              appId      : fbAppId,        // App ID
              status     : true,           // check login status
              cookie     : true,           // enable cookies to allow the server to access the session
              xfbml      : true            // parse page for xfbml or html5 social plugins like login button below
            });

            FB.login(function(response) {
               if (response.authResponse) {
                 FB.api('/me', function(response) {
                   window.alert(response.last_name + ', ' + response.first_name + ", " + response.email);
                 });
               }
             });
          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/en_US/all.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));

        </script>
</body>
</html>


<?php
require_once("php-sdk/facebook.php");

$config = array();
$config['appId'] = 'myAppId';
$config['secret'] = 'myCodeSecret';
$config['fileUpload'] = false; // optional

$facebook = new Facebook($config);

$user = $facebook->getUser();
$user_profile = $facebook->api('/me');
print_r($user_profile)

?>



