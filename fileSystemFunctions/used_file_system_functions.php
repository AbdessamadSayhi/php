<?php

file_put_contents("log.txt", "Hello World\r\n", FILE_APPEND); //file name with ext
fwrite($handle, "Hello World\r\n"); //stream
// both do the same

$handle = fopen("log.txt", "a+");
// open/create a file named log.txt in a+ mode and return a stream/pointer

fwrite($handle, "Hello Worlds\r\n");
// write in a file accept a stream as parameter.

fclose($handle);
//closing the file.
