<?php
$person = [
    "name" => "Abdessamad Sayhi",
    "age" => 24,
    "languages" => [
        "native" => "Arabic",
        "others" => [
            "English",
            "French"
        ],
    ],
];
foreach ($person as $key => $value) {
    if (is_array($value)) {
        echo "</br>" . $key . ": ";
        echo json_encode($value) . "</br>";
        continue;
    }
    echo "</br>" . $key . ": ";
    echo "</br>" . $value . "</br>";
}
// or implode function and explode
