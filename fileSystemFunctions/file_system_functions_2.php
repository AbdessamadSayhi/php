<?php

/*
    File System Functions
    - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

    --- Mode
    --- [r] For Read => Pointer At The Beginning
    --- [r+] For Read & Write => Pointer At The Beginning
    --- [w] For Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists
    --- [w+] For Read & Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists

    - fgets(File[Required], Length[Optional])
    --- Get A Line From An Open File
    --- Length => Number Of Bytes To Read || End Of Line If No Length
    - fread(File[Required], Length[Required])
    --- Get A Data From An Open File
    --- Length => Maximum Number Of Bytes To Read
    - fclose(File[Required])
    --- Closes An Open File Pointer
  */

$handle = fopen("elzero.txt", "r");

// echo fgets($handle, 4);

echo fread($handle, 1024);

fclose($handle);

echo "<br>***********************<br>";

/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- Mode

  --- [a] For Write => Pointer At The End + Create If Not Exists
  --- [a+] For Read & Write => Pointer At The End + Create If Not Exists
  --- [x] Create + Open For Write => Pointer At The Beginning
  --- [x+] Create + Open For Read & Write => Pointer At The Beginning

  - fwrite(File[Required], String[Required], Length[Optional])
  --- Write To An Open File
  --- Length => Maximum Number Of Bytes To Write
*/

$handle = fopen("elzero.txt", "r");

fwrite($handle, "\r\nThis Is A New Line 1", 5);
fwrite($handle, "\r\nThis Is A New Line 2");

fclose($handle);

echo "<br>***********************<br>";

/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- [c]
  ------ For Write
  ------ Create If Not Exists
  ------ No Problem If Its Exists
  ------ No Truncation
  ------ Pointer At The Beginning
  --- [c+] For Read &#038; Write

  - file(File[Required], Flag[Optional], Context[Optional])
  --- Read Entire File Into Array
  - feof(File[Required])
  --- Tests For EOF On A File Pointer
*/

// echo '<pre>';
// print_r(file("elzero.txt"));
// echo '</pre>';

// echo count(file("elzero.txt"));

$handle = fopen("elzero.txt", "r");

// $line = 1;

// while (! feof($handle)) {

//   echo "Line $line => " . fgets($handle) . "<br>";

//   $line++;

// }

for ($i = 0; $i < count(file("elzero.txt")); $i++) {

    echo fgets($handle) . "<br>";
}

fclose($handle);
