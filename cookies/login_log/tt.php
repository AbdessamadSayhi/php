<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_COOKIE["username"]) && isset($_COOKIE["password"])) {

    ob_start(); // Start output buffering

    $handle = fopen("log.txt", "a+");
    fwrite($handle, "--- " . $_COOKIE["username"] . " logged in at " . date("d\/m\/Y h:i:s A") . " ---\r\n");
    fwrite($handle, "username = " . $_COOKIE["username"] . "\r\n");
    fwrite($handle, "password = " . $_COOKIE["password"] . "\r\n");
    fwrite($handle, "------\r\n");
    fclose($handle);

    ob_end_flush(); // Flush the output buffer

}

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['formType'] == "insertText") {

    setcookie("username", $_POST["username"], strtotime("+ 1 month"));
    setcookie("password", $_POST["password"], strtotime("+ 1 month"));
    $loc = $_SERVER["REQUEST_URI"];
    header("Location: $loc");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['fileInput']) && isset($_POST['formType'])) {

    $formType = $_POST['formType'];

    if ($formType == "readText") :

        // Check if a file was uploaded
        if (isset($_FILES['fileInput']) && $_FILES['fileInput']['error'] == 0) {

            // Get the temporary file name
            $tmpFileName = $_FILES['fileInput']['tmp_name'];

            // Read the contents of the file
            echo "<br>******" . $tmpFileName . "********<br>";
            $fileContents = file_get_contents($tmpFileName);

            // Display the contents of the file
            echo "<pre>";
            echo $fileContents;
            echo "</pre>";
        } else {

            echo "Error uploading file.";
        }

    endif;
}
