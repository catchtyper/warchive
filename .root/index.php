<?php
session_start();
include "function.php";
readcookie();

if (isset($_GET['page'])){
$page = $_GET['page'];
	if (($_GET['page']=="about")){
			include 'template\about.html.php';
    }
    else {
			include 'template\error.html.php';
    }
  }
  else {
    include 'template\index.html.php';
}

?>
