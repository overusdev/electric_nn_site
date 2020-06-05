<?php
// include("../include/connection.php");
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

// $name = trim($_POST['name']);
// $phone = trim($_POST['phone']);

// echo $name.", ".$phone;

// Файлы phpmailer
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';
require '../PHPMailer-master/src/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];

$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "ok";
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;

    // Настройки вашей почты
    $mail->Host       = 'smtp.yandex.ru'; // SMTP сервера GMAIL
    $mail->Username   = 'svilkov00'; // Логин на почте
    $mail->Password   = '!Vfvby1955'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('svilkov00@yandex.ru', 'сергей вилков'); // Адрес самой почты и имя отправителя

    // Получатель письма
    // $mail->addAddress('youremail@yandex.ru');
    // $mail->addAddress('youremail@gmail.com'); // Ещё один, если нужен
    $mail->addAddress('ziga_1999@bk.ru');
    // $mail->addAddress('overus.dev@gmail.com'); // Ещё один, если нужен

    // Прикрипление файлов к письму
if (!empty($_FILES['myfile']['name'][0])) {
    for ($ct = 0; $ct < count($_FILES['myfile']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['myfile']['name'][$ct]));
        $filename = $_FILES['myfile']['name'][$ct];
        if (move_uploaded_file($_FILES['myfile']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Неудалось прикрепить файл ' . $uploadfile;
        }
    }
}

        // -----------------------
        // Само письмо
        // -----------------------
        $mail->isHTML(true);

        $mail->Subject = 'Запрос на звонок';
        $mail->Body    = "<b>Имя Клиента:</b> $name <br>
        <b>Телефон:</b> $phone<br><br>";

        // <b>Сообщение:</b><br>$phone";


// Проверяем отравленность сообщения
if ($mail->send()) {
    echo "$msg";
} else {
echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
}

} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}


echo "<pre>";
var_dump($name);
var_dump($phone);
var_dump($_SERVER['HTTP_HOST']);
echo "</pre>";

?>
