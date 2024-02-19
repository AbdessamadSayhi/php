<?php

/*
    File System Functions
    - disk_total_space()
    --- Get Total Space In Bytes => Then We Can Get [KB, MB, GB]
    - disk_free_space() || diskfreespace()
    --- Get Free Space In Bytes => Then We Can Get [KB, MB, GB]
    - file_exists(Path)
    --- Checks If A File Or Directory Exists
    - filesize(File_Name)
    --- Get Space In Bytes
  */

echo round(disk_total_space("C:") / 1024 / 1024 / 1024) . "<br>";
echo round(disk_free_space("C:") / 1024 / 1024 / 1024) . "<br>";
var_dump(file_exists("phplib.php"));
echo '<br>';
echo filesize("phplib.php");

echo "<br>************<br>";

/*
    File System Functions
    - is_dir(Name)
    --- Tells If The Filename Is A Directory
    - mkdir(Path[Required], Mode[Optional] = 0777, Recursive[Optional], Context[Optional])
    --- Permissions Is Ignored On Windows
    --- Permissions Is Octal Number Start With 0
    ------ Second Number Is => Owner Permission
    ------ Third Number Is => User Group Permission
    ------ Fourth Number Is => Others Permissions
    - rmdir(Name[Required], Context[Optional])
  */

var_dump(is_dir("php"));
echo '<br>';
var_dump(is_dir("phplib.php"));
echo '<br>';
// mkdir("Test/Upload/Files", 0777, true);
echo '<br>';
// rmdir("Test");
var_dump(file_exists("Test/Upload/Files"));

echo "<br>************<br>";

/*
    File System Functions
    - chmod(File[Required], Mode[Required])
    --- Change Mode
    - fileperms(Name)
    --- Gets File Permissions
    - clearstatcache()
    --- Clear Cache

    - You Can Change Owner chown()
    - You Can Change Group chgrp()
  */

//mkdir("dir", 0700);
echo fileperms("dir") . "<br>";
chmod("dir", 0644);
clearstatcache();
echo fileperms("dir") . "<br>";

echo "<br>************<br>";

/*
    File System Functions
    - basename(Path[Required], Suffix[Optional])
    --- Returns Trailing Name Component Of Path
    - dirname(Path[Required], Levels[Optional] = 1)
    --- Returns A Parent Directory's Path
    --- Levels => Number of Parent Directories To Go Up
    - realpath(Path[Required])
    --- Returns Absolute Path
    - pathinfo(Path[Required], Flags[Optional]) => Return Array
    --- PATHINFO_DIRNAME
    --- PATHINFO_BASENAME
    --- PATHINFO_EXTENSION
    --- PATHINFO_FILENAME
  */

echo basename(__FILE__) . "<br>";
echo basename(__FILE__, ".php") . "<br>";

echo dirname(__FILE__) . "<br>";

echo realpath(__FILE__) . "<br>";

echo "<pre>";
print_r(pathinfo(__FILE__));
echo "</pre>";

echo pathinfo(__FILE__)["extension"] . "<br>";
echo pathinfo(__FILE__)["dirname"] . "<br>";

echo pathinfo(__FILE__, PATHINFO_DIRNAME) . "<br>";
