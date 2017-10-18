<?php
  require_once('./config.php');
  print_r($_POST);
  $token  = $_POST['stripeToken'];

  $customer = \Stripe\Customer::create(array(
      'email' => 'customer@example.com',
      'source'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 2345,
      'currency' => 'usd'
  ));

  echo '<h1>Successfully charged $50.00!</h1>';
?>