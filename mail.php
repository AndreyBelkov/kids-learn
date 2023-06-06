<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
$mail->isHTML(true);

$name = $_POST['form__name'];
$nameChild = $_POST['form__name-child'];
$childOld = $_POST['form__old-child'];
$phone = $_POST['form__phone'];
$email = $_POST['form__email'];
//$description = $_POST['user_description'];
//business-intensive10@mail.ru   password:  uUsE1APd8op$


$mail->isSMTP();                                    
$mail->Host = 'smtp.mail.ru';  																							
$mail->SMTPAuth = true;                               
$mail->Username = 'business-intensive10@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'uUsE1APd8op$';
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465;

$mail->setFrom('business-intensive10@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('andrey_belkov@bk.ru');     // Кому будет уходить письмо 

$mail->Subject = 'Заявка с сайта Развивающие каникулы 2023';                                
$body = '<h1>Вам написали письмо!</h1>';
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
/*if(trim(!empty($description))){
  $body.='<p><strong>Дополнительные вопросы:</strong> '.$description.'</p>';
}*/

/*if(!empty($_FILES['user_file']['tmp_name'])){
  $filePath = dirname(__FILE__) . '/' . $_FILES['user_file']['name'];
  if(copy($_FILES['user_file']['tmp_name'], $filePath)){
    $fileAttach = $filePath;
    $body.='<p><strong>Фото в приложении</strong></p>';
    $mail->addAttachment($fileAttach);
  }
}*/

$mail->Body = $body;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: ordered.html');
}

?>



