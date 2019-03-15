<?php



    // message vars
    $msg = '';
    $msgClass = '';


    // Check for submit

    if(filter_has_var(INPUT_POST, 'submit')) {
       //get form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        
        // chech required fields
        
        if(!empty($email) && !empty($name) && !empty($message)) {
            //passed
           if(filter_var($email,FILTER_VALIDATE_EMAIL) === false) {
               //Failed
               $msg = 'Please enter valid email address';
               $msgClass = 'alert-danger';
           }
            else {
                //passed
                // Recipient Email
                
                $toEmail = 'support@elitetravel.com';
                $subject = 'Contact Request From '.$name;
                $body = '<h2>Contact Request</h2>
                         <h4>Name:</h4><p>'.$name.'</p>
                         <h4>Email:</h4><p>'.$email.'</p>
                         <h4>Message:</h4><p>'.$message.'</p>
                         ';
                
                // Email Headers
                
                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";
                
                //Additional Headers
                
                $headers .= "From: " .$name. "<" .$email.">". "\r\n";
                
                /*
                if(mail($toEmail, $subject, $body, $headers)) {
                    // Email Sent
                    
                    $msg = 'email has been sent';
                    $msgClass = "alert-success";
                }
                else {
                    $msg = 'Please fill in all fields';
                    $msgClass = "alert-danger";
                }
                    */
              $EmailArray = ['To'=> $toEmail, 'Subject'=> $subject, 'Body'=> $body];
                //session variables
                if(isset($_POST['submit'])) {
                // session_start(); //start the session
                    
                   // $_SESSION['name'] = htmlentities($_POST['name']);
                   // $_SESSION['email'] = htmlentities($_POST['email']);
                   // $_SESSION['messsage'] = htmlentities($_POST['message']);
                    
                    
                   $msg = "Thank you " .$_POST['name'] . " a member of our team will reply to " . $_POST['email'] . " shortly";
                   $msgClass = 'alert-success';
                    
                }
            
            }
        }
        else {
            //failed
            $msg = 'Fill in all fields';
            $msgClass = 'alert-danger';
            
        }
        
    }


    
?>


<!DOCTYPE html>

<html>

<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cerulean/bootstrap.min.css" />
    <link rel="stylesheet" href="index.css" />
</head>

<body style="background-color: #fff;">
    
    <?php include "components/Header.html";  ?>
    <nav class="navbar navbar-default">
        
        <div class="container">
            <div class="navbar-header" style="margin-top: 10%;">
                <h1 class="navbar-brand" href="index.php">Elite Travel Support</h1>
                <p>Submit your query and we will get back to you as soon as we can.</p>
            </div>
        </div>
    </nav>
    <div class="container" style="background-color: #fff;">
        <?php if($msg != ''): ?>
        <div class="alert <?php echo $msgClass; ?>">
            <?php echo $msg; ?>
        </div>
        <?php endif; ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <br />
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : '' ; ?></textarea>
                <br />
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

</body>

</html>
