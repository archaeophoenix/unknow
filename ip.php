<?php
// Function to get the user /visitor IP in PHP ( http://coursesweb.net/ )
function getUserIP() {
  $ip = $_SERVER['REMOTE_ADDR'];
  if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
    $ip = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
  }
  return $ip;
}

// Cals the getUserIP() function, and output the IP
$ip = getUserIP();
echo $ip;
?>