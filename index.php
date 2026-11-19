<?php
include'db.php';

if($_SERVER['request_method']=="post"){

$name= mysqli_real_escape_strings($con, $_post['name_of_the_mobile']);

$reviewername= mysqli_real_escape_strings($con, $_post['reviewer_name']);

$review= mysqli_real_escape_strings($con, $_post['review_text']);

$price= (float)$_post['price'];



$sql ="insert into mobile_reviews
  (name_of_the_mobile,reviewer_name, review_text, price)
  values 
  ('$name','$reviewername','$review','$price')";

}







?>