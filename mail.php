<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
$mail->isHTML(true);


if (isset($_POST['form__name'])) {$name = $_POST['form__name'];}
if (isset($_POST['form__name-child'])) {$nameChild = $_POST['form__name-child'];}
if (isset($_POST['form__old-child'])) {$childOld = $_POST['form__old-child'];}
if (isset($_POST['form__phone'])) {$phone = $_POST['form__phone'];}
if (isset($_POST['form__email'])) {$email = $_POST['form__email'];}
if (isset($_POST['english-level'])) {$englishLevel = $_POST['english-level'];}
if (isset($_POST['occupation'])) {$occupation = $_POST['occupation'];}
if (isset($_POST['skill'])) {$skill = $_POST['skill'];}
if (isset($_POST['business-shift'])) {$businessSmen = $_POST['business-shift'];}


//business-intensive10@mail.ru   password:  uUsE1APd8op$


$mail->isSMTP();                                    
$mail->Host = 'smtp.mail.ru';  																							
$mail->SMTPAuth = true;                               
$mail->Username = 'layoutdesigner@mail.ru'; 
$mail->Password = 'pFgVu7nCPrLJyme0Xgyn';  
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465;

$mail->setFrom('layoutdesigner@mail.ru');
$mail->addAddress('andrey_belkov@bk.ru');

$mail->Subject = 'Заявка с сайта Развивающие каникулы на бизнес интенсив';                                
$body = '<h1>Запись ребенка на бизнес интенсив</h1>';
if(trim(!empty($name))){
  $body.='<p><strong>Имя родителя:</strong> '.$name.'</p>';
}
if(trim(!empty($nameChild))){
  $body.='<p><strong>Имя ребенка:</strong> '.$nameChild.'</p>';
}
if(trim(!empty($childOld))){
  $body.='<p><strong>Возраст ребенка:</strong> '.$childOld.'</p>';
}
if(trim(!empty($phone))){
  $body.='<p><strong>Контактный телефон:</strong> '.$phone.'</p>';
}
if(trim(!empty($email))){
  $body.='<p><strong>Почта email:</strong> '.$email.'</p>';
}
if(trim(!empty($businessSmen))){
  $body.='<p><strong>Бизнес-смена:</strong> '.$businessSmen.'</p>';
}
if(trim(!empty($englishLevel))){
  $body.='<p><strong>Уровень английского:</strong> '.$englishLevel.'</p>';
}
if(trim(!empty($occupation))){
  $body.='<p><strong>Чем обычно занимается Ваш ребенок в свободное от школы время? Выбрано:</strong> '.$occupation.'</p>';
}
if(trim(!empty($skill))){
  $body.='<p><strong>Какие навыки вы хотели бы развить в вашем ребенке больше всего? Выбрано:</strong> '.$skill.'</p>';
}



$mail->Body = $body;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: ordered.html');
}

?>



