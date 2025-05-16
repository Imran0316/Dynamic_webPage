<?php

if(isset($_POST["submit"])){
  $name=$_POST["name"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];
  $comment=$_POST["comment"];

  $conn = mysqli_connect("localhost","root","","webpage");

  $sql = "INSERT INTO `user_comm`(`name`, `email`, `phone`, `comment`) VALUES ('$name','$email','$phone','$comment')";

  $run=mysqli_query($conn,$sql);
  if($run){
    header("location: index.php");
  }else{
    echo "Error";
  }


}
?>