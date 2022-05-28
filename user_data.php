<?php 
   $name = $_POST['name'];
   $email = $_POST['email'];
   $dateofBirth = $_POST['dateofBirth'];
   $gender = $_POST['gender'];
   $country = $_POST['country'];
   
   $filename = "./userdata.csv";
   $handle = fopen($filename, "a");
   fwrite($handle,"\n\n\n$name \n$email \n$dateofBirth \n$gender \n$country");
   fclose($handle);

   print_r("Data submited and saved: ");
   echo "<br>"." Name: ";
   print_r( $name);
   echo "<br>"." Email: ";
   print_r( $email);
   echo "<br>"." date of Birth: ";
   print_r( $dateofBirth);
   echo "<br>"." Gender: ";
   print_r( $gender);
   echo "<br>"." Country: ";
   print_r( $country);
?>