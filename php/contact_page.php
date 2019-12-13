<?php 
    // Message Varaiables
    $msg = '';
    $msgClass = '';

    echo 'Ni hao';

    if(filter_has_var(INPUT_POST, 'submit')){
        // Get Form Data
        echo 'Ni hao';
        // $name = htmlspecialchars($_POST['name']);
        // $email = htmlspecialchars($_POST['email']);
        // $message = htmlspecialchars($_POST['message']);

        // if(!empty($email) && !empty($name) && !empty($message)){
        //     if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        //         $msg = 'Please use a valid email';
        //         $msgClass = 'alert-danger';
        //     } else{
        //         $toEmail = 'jomi@jomibitancor.com';
        //         $subject = 'Contact Form From' .$name;
        //         $body = '<h2> Contact Request </h2>
        //                 <h4>Name </h4><p>'.$name.'</p>
        //                 <h4>Email </h4><p>'.$email.'</p>
        //                 <h4>Message </h4><p>'.$message.'</p>';

        //         $headers = "MIME-Version: 1.0" ."\r\n";
        //         $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";

        //         $headers .= "From: ".$name. "<".$email.">"."\r\n";
                
        //         if(mail($toEmail, $subject, $body, $headers)){
        //             $msg = 'Your email has been sent!';
        //             $msgClass = 'alert-success';
        //         } else {
        //             $msg = 'Your email was not sent';
        //             $msgClass = 'alert-danger';
        //         }
        //     }
        // }else{
        //     // Failed
        //     $msg = 'Please fill in all fields';
        //     $msgClass = 'alert-danger';
        // }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <title>Contact Me</title>
</head>
<body>
    <div class="container" id="contact-section">
        <div class="form-container">
            <h1>CONTACT ME</h1>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input class="form-control" type="text" name="name" >
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input class="form-control" type="text" name="email">
                </div>
                <div class="form-group">
                    <label for="Message">Message</label>
                    <textarea id="message" class="form-control" name="message" rows="4"> </textarea>
                </div>
                <input class="btn btn-outline-dark" type="submit" value="Send Form">
            </form>
        </div>
    </div>
        
</body>
</html>