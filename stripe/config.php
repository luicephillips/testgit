<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_PHfn4QGQtmI2xHfJ0rcU6H37",
  "publishable_key" => "pk_test_h02Rzxpcx4TzsUIqRR9Ehdqo"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>