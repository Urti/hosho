<?php
$target_dir = "uploads/";
$filename = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$extension = pathinfo($filename,PATHINFO_EXTENSION);
$data = date("mdy_His");
$new = $data."-".basename($_FILES["fileToUpload"]["name"]);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an document - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an document.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($extension != "doc" && $extension != "docx" && $extension != "pdf") {
    echo "Sorry, only DOC, DOCX & PDF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/{$new}")) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>