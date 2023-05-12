<?php
if(isset($_POST['send'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) &&  !empty($_POST['comments'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $comments=$_POST['comments'];
        $header="From: noreply@pepe.com"."\r\n";
        $header="Reply-to: noreply@example.com" ."\r\n";
        $header="X-Mailer: PHP/" . phpversion();
        $mail=mail($name,$email,$phone,$comments);
        if($mail){
            echo"<h4> Message sent succefully</h4>" ;
        }
    }
    else{echo"ups";                                        }
}

?>