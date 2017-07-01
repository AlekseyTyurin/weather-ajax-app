<?php
$WeatherSource = "https://api.forecast.io/forecast/fde88732222bfd46c54fb2fa524554f1/" . $_GET["lat"] . "," . $_GET["lng"];
header("Content-Type: application/json");
header("Cache-Control: no-cache");
readfile($WeatherSource);
?>