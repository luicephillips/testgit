<?php
  require_once('./config.php');

  $token  = $_POST['stripeToken'];
  
  $plan = \Stripe\Plan::create(array(
    "name" => "Basic Plan",
    "id" => "basic-monthly",
    "interval" => "month",
    "currency" => "usd",
    "amount" => 5000,
  ));

  $customer = \Stripe\Customer::create(array(
      'email' => 'customer@example.com',
      'source'  => $token
  ));

  /*$charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 2345,
      'currency' => 'usd'
  ));*/
  
  
  
  $charge = \Stripe\Subscription::create(array(
    "customer" => $customer->id,
    "items" => array(
      array(
        "plan" => "basic-monthly",
      ),
    ),
  ));

  echo '<h1>Successfully charged $50.00!</h1>';
?>