<?php
// Awesome Facebook Application
//
// Name: Behind the coin
//

require_once 'facebook-php-sdk/src/facebook.php';

// Create our Application instance.
$facebook = new Facebook(array(
  'appId' => '116500995100273',
  'secret' => 'f33cf502ebd22430a3a4afcc341fe2cc',
  'cookie' => true,
));