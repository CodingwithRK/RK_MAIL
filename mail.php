<?php 
    if(isset($_POST['submit'])){
        

        
        $to = "pappalarajkumar@gmail.com";
        $from = $_POST['email']; // this is the sender's Email address
    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        $subject = "Mail From Company Website. To Admin";
        $subject2 = "Company";
        $message = "Name: ". $name . "\nEmail: " . $email . "\nPhone Number: " . $phone . "\nSubject: " . $subject . "\nMessage: " . $message . " " . "\n\n" . $_POST['message'];
        $message2 = "Thanks For Contacting Company\nWe will Contact You Shortly\nHere is a copy of your message " . $name . "\n\n" . $_POST['message'];
    
        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        // header('Location: contact'); //to redirect to page
        ?>
        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
        <?php
    }
?>