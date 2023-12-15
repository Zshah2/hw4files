<?php
$emailValid = filter_var($email, FILTER_VALIDATE_EMAIL);

if($emailValid) {
  echo "Email is valid";
} else {
  echo "Email is INVALID";
}
?>