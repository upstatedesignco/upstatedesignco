<?php

  if (isset($_POST['submit'])) {
     $name = $_POST['name'];
     $mailFrom = $_POST['mail'];

      $mailTo = "jrstagliano@yahoo.com"
      $headers = "From: ".$mailFrom;
      $txt = "You have received an email from ".$name.".\n\n".

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");

}
?>