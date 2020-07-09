<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "agpodymniak@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "Dostales wiadomosc od ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header('Location: index.php');
}else{
  header('Location: error.php')
}

?>
