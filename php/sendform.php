<?php

$name = $_GET['order_name'];// Берём данные из input c атрибутом name="name"
$phone = $_GET['order_phone']; // Берём данные из input c атрибутом name="phone"
$city = $_GET['order_city']; // Берём данные из input c атрибутом name="city"
$checkbox = $_GET['order_checkbox'];

$token = "1203957442:AAH4AtYOvbXUk_zMtcR_k4ERBvFuuoYqqpo";
$chat_id = "-413611289";
$sitename = "kazmetaltrade.kz"; //Указываем название сайта

$arr = array(
  'Заявка с сайта: ' => $sitename,
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Город:' => $city,
  'Пользователь согласен с политикой конфиденциальности: ' => $checkbox,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: ../pages/thx.php');
} else {
  echo "Error";
}
?>