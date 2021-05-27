<?php

$feedback_name = $_GET['feedback_name'];
$feedback_textarea = $_GET['feedback_textarea']; 
$feedback_checkbox = $_GET['feedback_checkbox'];

$token = "1203957442:AAH4AtYOvbXUk_zMtcR_k4ERBvFuuoYqqpo";
$chat_id = "-413611289";
$sitename = "kazmetaltrade.kz"; //Указываем название сайта

$feedback_arr = array(
  'Заявка с сайта: ' => $sitename,
  'Имя: ' => $feedback_name,
  'Отзыв: ' => $feedback_textarea,
  'Пользователь согласен с политикой конфиденциальности: ' => $feedback_checkbox,
);

foreach($feedback_arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: ../pages/feedback_thx.php');
} else {
  echo "Error";
}
?>