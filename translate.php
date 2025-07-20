s<?php
$lang = $_GET['lang'] ?? 'en';

if ($lang === 'hi') {
  echo json_encode([
    "title" => "फर्नीक्राफ्ट | प्रीमियम फर्नीचर",
    "welcome" => "हमारे स्टोर में आपका स्वागत है!"
  ]);
} else {
  echo json_encode([
    "title" => "FurniCraft | Premium Furniture",
    "welcome" => "Welcome to our store!"
  ]);
}
?>
