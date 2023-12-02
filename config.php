<?php
// Zaman dilimini Türkiye (İstanbul) saatine ayarlayın
date_default_timezone_set('Europe/Istanbul');

// Kullanıcının IP adresini alın
$user_ip = isset($_SERVER['HTTP_CF_CONNECTING_IP']) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : 'N/A';

// Ziyaret edilen sayfanın URL'sini alın
$page_url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : 'N/A';

// Hangi ülkeden ziyaret ettiği
$country = isset($_SERVER['HTTP_CF_IPCOUNTRY']) ? $_SERVER['HTTP_CF_IPCOUNTRY'] : 'N/A';

// Platform belirleme
$platform = isset($_SERVER['HTTP_SEC_CH_UA_PLATFORM']) ? $_SERVER['HTTP_SEC_CH_UA_PLATFORM'] : 'N/A';

// Ziyaretin tarih ve saatini alın
$visit_time = date("Y-m-d H:i:s");

// Log verilerini birleştirin
$log_data = "$country\t$user_ip\t$platform\t$visit_time\t$page_url" . PHP_EOL;

// Log dosyasına verileri ekleyin (access_log.txt dosyasına yaz)
file_put_contents('access_log.txt', $log_data, FILE_APPEND);
?>
