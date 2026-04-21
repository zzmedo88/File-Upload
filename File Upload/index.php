<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["myFile"])) {
  $targetDir = "uploads/";
  $fileName = basename($_FILES["myFile"]["name"]);
  $targetFilePath = $targetDir . $fileName;
  // echo $_FILES["myFile"]["tmp_name"];

    // Move from temporary location to target directory
    if (move_uploaded_file($_FILES["myFile"]["tmp_name"], $targetFilePath)) {
        echo "The file $fileName has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File-Upload</title>
</head>
<body>
  <form action="" method="POST" enctype="multipart/form-data">
    Select file: <input type="file" name="myFile">
    <input type="submit" value="Upload">
  </form>
</body>
</html>