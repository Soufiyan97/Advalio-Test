<?php
   
   if(isset($_POST['submit'])){
       $fisrtName=$_POST['FirstName'];
       $lastName=$_POST['LastName'];
       $mailFrom=$_POST['Email'];
       $message=$_POST['Message'];

       $mailTo = "othmantahiri9@gmail.com";
       $headers = "From : ".$mailFrom;
       $txt = "You have received an e-mail from ".$fisrtName." ".$lastName.".\n\n".$message;

       mail($mailTo, $txt, $headers);
       header("Location : contact2.html?mailsend");
   }
