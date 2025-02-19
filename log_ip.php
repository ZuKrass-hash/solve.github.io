<?php
// Получаем IP-адрес пользователя
$ip = $_SERVER['REMOTE_ADDR'];

// Открываем файл для записи (если файла нет, он будет создан)
$file = fopen('ips.txt', 'a');

// Записываем IP и текущую дату
fwrite($file, $ip . " - " . date("Y-m-d H:i:s") . "\n");

// Закрываем файл
fclose($file);
?>
