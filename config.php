<?php

/* By Qassim Hassan, http://wp-time.com/send-email-via-gmail-api-using-php/ */

$scope = "https://mail.google.com/"; // Do not change it!

$redirect_uri = "http://localhost/gmail/sign-in.php"; // Enter your redirect_uri

$client_id = "452510973749-vo4s1of5ir60ft6iaiae2n0cjnhaqr8u.apps.googleusercontent.com"; // Enter your client_id

$client_secret = "-zJx9JGF0dN9vEQDovblep12"; // Enter your client_secret

$login_url = "https://accounts.google.com/o/oauth2/v2/auth?scope=$scope&response_type=code&redirect_uri=$redirect_uri&client_id=$client_id"; // Do not change it!

?>