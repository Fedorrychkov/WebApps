<?

$message = '';

$sendto = "sergei_rychkov@mail.ru, fedorrychkov@yandex.ru";

$headers  = "From: svrlab@no-replay.com" . "\r\n";
$headers .= "Reply-To: Без ответа". "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма


$message  = "<html><body style='font-family:Arial,sans-serif;'5>";
$message .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новый заказ с SVRLAB</h2>\r\n";

if (isset($_POST['whatform'])) {
    $formFor = htmlspecialchars($_POST['FormFor'], ENT_QUOTES);

    $message .= '<br/> Назначение: '.$formFor;
}
if (isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);

    $message .= '<br/> Имя: '.$name;
}
if (isset($_POST['phone'])) {
    $phone  = htmlspecialchars($_POST['phone'], ENT_QUOTES);

    $message .= '<br/> Телефон: '.$phone;
}
if (isset($_POST['mail'])) {
    $mail = htmlspecialchars($_POST['mail'], ENT_QUOTES);

    $message .= '<br/> Почта: '.$mail;
}
$message .= "</body></html>";
// отправка сообщения
if(@mail($sendto, $subject, $message, $headers)) {
    echo "true";
} else {
    echo "false";
}

echo $message;

?>