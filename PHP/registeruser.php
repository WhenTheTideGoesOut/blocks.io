<?php // Create a customer using a Stripe token

// If you're using Composer, use Composer's autoload:
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

 


  exit;
}    
catch(Exception $e)
{
  header('Location:landing.html');
  error_log("unable to sign up customer:" . $_POST['stripeEmail'].
    ", error:" . $e->getMessage());
}

        try{
              require ('connect.php');
            
              if(isset($_POST['user_register_form']))
                {
                //Retrieve the field values from our registration form.
                    $username = htmlspecialchars(!empty($_POST['useremail']) ? trim($_POST['useremail']) : null);
                    $pass = htmlspecialchars((!empty($_POST['password']) ? trim($_POST['password']) : null));
                    $confirmPass = htmlspecialchars(!empty($_POST['confirmPassword']) ? trim($_POST['confrimPassword']):null);

                      if($pass!==$confirmPass)
                        {
                          echo "passwords do not match";
              
                        }

          
                //Now, we need to check if the supplied username already exists.
                
                //Construct the SQL statement and prepare it.
                $sql = "SELECT COUNT(username) AS num FROM users WHERE username = :username";
                $stmt = $pdo->prepare($sql);
                //Bind the provided username to our prepared statement.
                //Execute and Fetch the row.
                $stmt->bindValue(':username', $username);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                //If the provided username already exists - display error.
                //TO ADD - Your own method of handling this error. For example purposes,
                //I'm just going to kill the script completely, as error handling is outside
                //the scope of this tutorial.
                if($row['num'] > 0)
                  {
                    die('That username already exists!');
                  }
/**
 * 
 * Need to update the insert function to allow the full completion of the table
 * 
 */

                    //Hash the password as we do NOT want to store our passwords in plain text.
                $passwordHash = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));
                  //Prepare our INSERT statement.
                  //Remember: We are inserting a new row into our users table.
                $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
                $stmt = $pdo->prepare($sql);  
                  //Bind our variables.
                $stmt->bindValue(':username', $username);
                $stmt->bindValue(':password', $passwordHash);
                  //Execute the statement and insert the new account.
                  $result = $stmt->execute();
                  //If the signup process is successful.
                  if($result){
                      //What you do here is up to you!
                      echo 'Thank you for registering with our website.';
                  }

              }

            }
            catch (PDOException $error)
            {
                echo sql."<br".$error->getMessage();
            }



