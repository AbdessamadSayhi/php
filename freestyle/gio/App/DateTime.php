<?php
$dateTime = new DateTime('12/02/1999');

$dateTime->setTimeZone(new DateTimeZone('Africa/Casablanca'));

echo $dateTime->getTimezone()->getName().' - '.$dateTime->format('d/m/Y g:i A').PHP_EOL;
echo '<br>';
//var_dump($dateTime);

$date = '02/12/1999'; // USA FORMAT

$nDate = DateTime::createFromFormat('d/m/Y', $date)->setTime(0,0);

var_dump($nDate);

//******************

$from = new DateTime();
//$from = new DateTimeImmutable(); don't need to use clone
$to = (clone $from)->add(new DateInterval('P1M'));
echo '<br>';
echo $from->format('d/m/Y') .' - '. $to->format('d/m/Y');