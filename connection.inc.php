<?php
  session_start();
  // Check connection
  $conn = mysqli_connect("localhost","root","xme123456+","ecom_db");

  if (!$conn){
    echo "Connection failed to database";
  }
  define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/ecom/');
  define('SITE_PATH','http://localhost/ecom/');

  define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'/media/');
  define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'/media/');

  // else {
  //   echo "Database Successfully Connected";
  // }
 ?>
