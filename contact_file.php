<?php
if(isset($_POST['submit'])) {
    $first_name="First Name:".$_POST['first_name']."";
    $last_name="Last Name:".$_POST['last_name']."";
    $gender="Gender:".$_POST['gender']."";
    $email="Email:".$_POST['email']."";
    $title="Title:".$_POST['title']."";
    $message="Message:".$_POST['message']."";
    $file=fopen("save_data.txt", "a");
    fwrite($file, $first_name);
    fwrite($file, $last_name);
    fwrite($file, $gender);
    fwrite($file, $email);
    fwrite($file, $title);
    fwrite($file, $message);
    fclose($file);
    echo "<h3>Your message have successfully been submitted. Thank you for contacting me!</h3>";
}
?>