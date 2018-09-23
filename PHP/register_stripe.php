<?php // Create a customer using a Stripe token

// If you're using Composer, use Composer's autoload:
echo 'In the register_stripe at the start';
require_once('vendor/autoload.php');

// Be sure to replace this with your actual test API key
// (switch to the live key later)
\Stripe\Stripe::setApiKey("sk_test_CxcmTfWsXzenjjeHZ6bbHXJR");
echo "we are in the register user page ";
    try
        {
            $customer = \Stripe\Customer::create(array(
            'email' => $_POST['stripeEmail'],
            'source'  => $_POST['stripeToken'],
        ));

            $subscription = \Stripe\Subscription::create(array(
            'customer' => $customer->id,
            'items' => array(array('plan' => 'weekly_box')),
        ));

         header("Location: http://www.bbc.com/");
      //  exit;
        }    
catch(Exception $e)
{
  header('Location:landing.html');
  error_log("unable to sign up customer:" . $_POST['stripeEmail'].
    ", error:" . $e->getMessage());
}
