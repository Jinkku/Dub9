<?php
// Clear all cookies
foreach ($_COOKIE as $cookieName => $cookieValue) {
    setcookie($cookieName, '', time() - 3600, '/');
    unset($_COOKIE[$cookieName]);
}

// Redirect to a desired page or display a message
echo '<meta http-equiv="refresh" content="0; url=/" />';
?>
