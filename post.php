<?php 
 
$sendto   = "ansaril3g@gmail.com"; // почта, на которую будет приходить письмо
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['message']; // сохраняем в переменную данные полученные из поля c телефонным номером
$usermail = $_POST['email']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
 
// Формирование заголовка письма
$subject  = "Новое сообщение - Телемедицина";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
 
// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с medicine-live.ru/tech</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Текст:</strong> ".$usertel."</p>\r\n";
$msg .= "</body></html>";
 
// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
    echo "<html><head><meta http-equiv="refresh" content="4; url=http://medicine-live.ru/tech"></head><body>Ваш запрос упешно отправлен!<br> Через 4 секунды вы будете возвращены на страницу</body></html>";
} else {
    echo "<html><head><meta http-equiv="refresh" content="4; url=http://medicine-live.ru/tech"></head><body>Проблема с отправкой запроса, напишите нам на почту medicineliveru@gmail.com!<br> Через 4 секунды вы будете возвращены на страницу</body></html>";
}
 
?>
