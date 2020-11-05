<?php
    
    $mailHeaders = "From: " . $_POST["name"] . "<". $_POST["email"] .">\r\n";
    $from = $_POST["contact-type"];
    $finalMssg = "Mi numero es: " . $_POST["phone"] ."\r\n" . $_POST["message"];
    
      if(mail($from, $_POST["subject"], $finalMssg, $mailHeaders)) {
        if(strpos($from, 'bbva') !== FALSE){
          header('Location: http://cwa.com.ar/bbva_contacto_exito.html', true, 301);
        } else {
          header('Location: http://cwa.com.ar/jelper_contacto_exito.html', true, 301);
        }
        exit();
      } else {
          if(strpos($from, 'bbva') !== FALSE){
            header("Location: http://cwa.com.ar//bbva_contacto_errorInesperado.html", true, 301);
          } else {
            header("Location: http://cwa.com.ar/jelper_contacto_errorInesperado.html", true, 301);
          }
        exit();
      }
?>