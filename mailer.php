<?php
    
    $mailHeaders = "From: " . $_POST["name"] . "<". $_POST["email"] .">\r\n";
    // echo($_POST["contact-type"]"\r\n");
    // echo($_POST["subject"]"\r\n");
    // echo($mailHeaders "\r\n");
    // echo($_POST["phone"]"\r\n");
    
      if(mail($_POST["contact-type"], $_POST["subject"], $_POST["message"], $mailHeaders)) {
      } else {

      }
?>