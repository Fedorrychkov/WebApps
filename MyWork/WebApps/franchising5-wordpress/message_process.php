<?

$message = '';

$sendto = "franchaizing-5@yandex.ru";

$headers  = "From: franchising5@no-replay.ru" . "\r\n";
$headers .= "Reply-To: Без ответа". "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма


$message  = "<html><body style='font-family:Arial,sans-serif;'5>";
$message .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Письмо с сайта</h2>\r\n";

if (isset($_POST['FormFor'])) {
    $formFor = htmlspecialchars($_POST['FormFor'], ENT_QUOTES);

    $message .= '<br/> Назначение формы: '.$formFor;
}
if (isset($_POST['WhereIsForm'])) {
    $whereForm = htmlspecialchars($_POST['WhereIsForm'], ENT_QUOTES);

    $subject .= 'Форма: '.$whereForm;
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
if (isset($_POST['city'])) {
    $city = htmlspecialchars($_POST['city'], ENT_QUOTES);

    $message .= '<br/> Город: '.$city;
}

if (isset($_POST['other_input_hidden'])) {
    $other_input_hidden = htmlspecialchars($_POST['other_input_hidden'], ENT_QUOTES);

    $message .= '<br/> Сфера бизнеса: '.$other_input_hidden;
}
if (isset($_POST['year_input_hidden'])) {
    $year_input_hidden = htmlspecialchars($_POST['year_input_hidden'], ENT_QUOTES);

    $message .= '<br/> Лет на рынке: '.$year_input_hidden;
}
if (isset($_POST['time_input_hidden'])) {
    $time_input_hidden = htmlspecialchars($_POST['time_input_hidden'], ENT_QUOTES);

    $message .= '<br/> Уделяется бизнесу ч\день: '.$time_input_hidden;
}
if (isset($_POST['price_input_hidden'])) {
    $price_input_hidden = htmlspecialchars($_POST['price_input_hidden'], ENT_QUOTES);

    $message .= '<br/> Средняя чистая прибыль в месяц: '.$price_input_hidden;
}
if (isset($_POST['stat_input_hidden'])) {
    $stat_input_hidden = htmlspecialchars($_POST['stat_input_hidden'], ENT_QUOTES);

    $message .= '<br/> Примерная динамика прибыли за 2 года: '.$stat_input_hidden;
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
