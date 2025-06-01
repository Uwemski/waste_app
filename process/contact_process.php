<?php
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '..\vendor\autoload.php';
    include '..\contact_sanitize.php';

    if(isset($_POST['btn_contact'])){
        $name = sanitize($_POST['name']);
        $em = sanitize($_POST['email']);
        $msg = sanitize($_POST['message']);


        if($name && $em && $msg){

            $mail= new PHPMailer(true);
            
            try{
                    //insert to the database

                    //use the php mailer
                    $mail->isSMTP(); 

                    $mail-> SMTPDebug = 2;
                    $mail->SMTPAuth = true;
                    $mail-> Host = 'smtp.gmail.com';

                    $mail-> Username = 'iconuwemfrank@gmail.com';

                    $mail-> Password = 'ulhknhkogfhvrhem';

                    $mail-> SMTPSecure = 'ssl';

                    $mail-> Port = 465;

                    //Add the recipients of the mail
                    $mail->setFrom($em, $name);
                    $mail->addAddress('iconuwemfrank@gmail.com');

                    $sub = "Contact Message from Waste Project";
                    
                    $mail->Subject = $sub;
                    $mail->Body = $msg;


                    $mail->send();

                    echo "Mail has been sent successfully";
                    $_SESSION["email_success"] = "Mail has been sent successfully";
                    header("Location: ../index.php");

            }catch(Exception $e){
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

       
        
        }
    }

?>