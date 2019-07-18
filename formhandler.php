<?php
    if(isset($_POST['submit'])) {
     $name = $_POST['Name'];
     $emailfrom = $_POST['Email'];
     $message = $_POST['Message'];
     $mailto = "syedanwar016@gmail.com";
    $headers = "from:".$emailfrom;
    $text = "you have recieved from".$name."\n\n".$message;
  mail($mailto,$text,$headers);
  header("location: index.html?mailsend");  
  }
     
 ?>