<?php

/*
    String Functions
    - parse_str(String[Required], Array[Required])
    - quotemeta(String[Required])
    - str_pad(String[Required], Length[Required], String[Optional], Pad Flag[Optional])
    --- STR_PAD_BOTH
    --- STR_PAD_LEFT
    --- STR_PAD_RIGHT
    - strtr(String[Required], From[Required], To[Required]) || strtr(String[Required], Array[Required])
  */
// before php 7 we could use these values by using the name of the variable now we should use the query array.
parse_str("name=Abdessamad&email=abdou@gmail.com&os=win", $query);

echo '<pre>';
print_r($query);
echo '</pre>';

echo $query["name"] . "<br>";
echo $query["email"] . "<br>";
echo $query["os"] . "<br>";

echo "Hello [] () * + . <br>";
echo quotemeta("Hello [] () * + . <br>");

echo strtr("Abde@@amad Sayhi", "@", "s");

echo "<br>";

$translation = ["@" => "l", "#" => "o"];

echo strtr("E@zer# Web Sch##@", $translation);

str_replace("@", "o", "Abd@ou");

echo "*********************<br>";
/*
String Functions
- substr_replace(String[Required], Replace With Or Insert[Required], Start[Required], Length[$])
--- $ Positive Number => Length Of String To Be Replaced
--- $ Negative Number => Characters Left At The End After Replacement
--- $ 0               => Insert Instead Of Replace
*/
substr_replace("OneTwo", 1, 0); // 1
substr_replace("OneTwo", 1, 3); // One1
substr_replace("OneTwo", 2, 1, 4); // O2o

echo strstr("Elzero Web", "W") . "<br>"; // Web
echo strstr("Elzero Web", "z") . "<br>"; // zero Web
echo strstr("Elzero Web", "W", True) . "<br>"; // Elzero
