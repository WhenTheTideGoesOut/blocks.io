<?php


        try{
                    $firstname= htmlspecialchars(!empty($_POST['firstname']) ? trim($_POST['firstname']) : null);
                    $surname= htmlspecialchars(!empty($_POST['surname']) ? trim($_POST['surname']) : null);
                    $username = htmlspecialchars(!empty($_POST['useremail']) ? trim($_POST['useremail']) : null);
                    $pass = htmlspecialchars((!empty($_POST['password']) ? trim($_POST['password']) : null));
                    $confirmPass = htmlspecialchars(!empty($_POST['confirmpassword']) ? trim($_POST['confirmpassword']):null);
                    $companyName = htmlspecialchars((!empty($_POST['companyname']) ? trim($_POST['companyname']) : null));
                    echo'the user name is '.$firstname. ' <br>';
                    echo'the Confirm Password name is '.$confirmPass. ' <br>';
                    echo'the Password name is '.$pass. ' <br>';
         

          

                      if(strcmp($pass,$confirmPass) !==0)
                        {
                            require '../html/landing.html';
                            die( " passwords do not match. Please try again. ");
              
                        }
                        

                //Now, we need to check if the supplied username already exists.
                
                //Construct the SQL statement and prepare it.
                $sql = "SELECT COUNT(email) AS num FROM users WHERE email = :username";
                $stmt = $pdo->prepare($sql);
                //Bind the provided username to our prepared statement.
                //Execute and Fetch the row.
                echo " Have built the statement <br>";
                $stmt->bindValue(':username', $username);
                $stmt->execute();   
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                echo " Have fetched the statement <br>";
                //If the provided username already exists - display error.
                //TO ADD - Your own method of handling this error. For example purposes,
                //I'm just going to kill the script completely, as error handling is outside
                //the scope of this tutorial.
                echo " Going to count the return value. ";
                if($row['num'] > 0)
                  {
                    die('That username already exists!');
                  }
                  echo ' We have checked if the user has already been created. ';
/**
 * 
 * Need to update the insert function to allow the full completion of the table
 * 
 *            The users table has the following 
 *            id - an auto increment table
 *            email 
 *            company_name
 *            company_db
 *            pass_dv
 *            location
 *            datestamp
 * 
 */

                 //Hash the password as we do NOT want to store our passwords in plain text.
                $passwordHash = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));
                //Prepare our INSERT statement.
                //Remember: We are inserting a new row into our users table.
                echo "<br> we have encrypted the password <br> ";
                $sql = "INSERT INTO users (email, pass_dv, company_name) VALUES (:username, :password, :company_name)";
                $stmt = $pdo->prepare($sql);  
                //Bind our variables.
                $stmt->bindValue(':username', $username);
                $stmt->bindValue(':password', $passwordHash);
                $stmt->bindValue(':company_name', $companyName);
                //Execute the statement and insert the new account.
                $result = $stmt->execute();
                //If the signup process is successful.
                echo "<br> have run the insert into the table ";
                  
                if($result)
                  {
                      //What you do here is up to you!
                      require '../html/homescreen.html';
                      echo 'Thank you for registering with our website.';
                  }

              }


        
            catch (PDOException $error)
            {
                echo sql." hold on there is an error? <br>".$error->getMessage();
            }



