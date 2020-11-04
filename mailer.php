<?php
	  // Using the ini_set()
	  ini_set("SMTP", "mail.zend.com");
	  ini_set("sendmail_from", "shlomo@zend.com");
    //ini_set("smtp_port", "25");
    
    $mailHeaders = "From: " . $_POST["name"] . "<". $_POST["email"] .">\r\n";
    echo($_POST["contact-type"]"\r\n");
    echo($_POST["subject"]"\r\n");
    echo($mailHeaders "\r\n");
    echo($_POST["phone"]"\r\n");
    
      if(mail($_POST["contact-type"], $_POST["subject"], $_POST["message"], $mailHeaders)) {
      } else {

      }
?>