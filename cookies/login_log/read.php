<?php
echo $_SERVER['REQUEST_METHOD'];
// Handling the form for reading text from a file
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_FILES['fileInput'])) {

  if ($_FILES['fileInput']['error'] == 0) {

    // Get the temporary file name
    $tmpFileName = $_FILES['fileInput']['tmp_name'];

    // Read the contents of the file
    $fileContents = file_get_contents($tmpFileName);

    // Display the contents of the file
    echo "<pre>";
    echo $fileContents;
    echo "</pre>";
  } else {
    echo "Error uploading file.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>READ</title>
</head>

<body>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="formType" value="readText" />
    <label for="fileInput">Choose a file:</label>
    <input type="file" name="fileInput" id="fileInput" /><br />
    <button type="submit">go</button>
  </form>
</body>
<a href="insert.php">insert</a>

</html>