<?php

$dir = 'uploads/';
$file = $dir . basename($_FILES['fileToUpload']['name']);
$FileType = strtolower(pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION));

if (isset($_POST['submit'])) {

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 10000000) {
    die("Sorry, your file is too large less than 10mb");
  } else if ($FileType != "pdf") {
    echo "Sorry, only pdf files are allowed.";
  } else {
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $file))
      echo "Success";
  }
}
