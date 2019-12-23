<?php

echo "carreguei"
echo $nome = $_POST['nome']; 
echo $email = $_POST['email']; 
echo $telefone = $_POST['telefone']; 
echo $como_conheceu = $_POST['como_conheceu']; 
echo $assunto = $_POST['assunto']; 
echo $mensagem = $_POST['mensagem']; 


// $nome = "Abraao";
// $email = "az@gmail";
// $mensagem = "Mensagem Teste";

// require_once("PHPMailerAutoload.php");

// $mail = new PHPMailer();

// $mail->isSMTP();
// $mail->Host = 'smtps.uol.com.br';
// $mail->Port = 587;
// $mail->SMTPSecure = 'tls';
// $mail->SMTPAuth = true;
// $mail->Username = "MEUEMAIL@gmail.com";
// $mail->Password = "MINHASENHA";

// $mail->setFrom("MEUEMAIL@gmail.com", "Alura Curso PHP e MySQL");

// $mail->addAddress("MEUEMAIL@gmail.com");

// $mail->Subject = "Email de contato da loja";

// $mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");

// $mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}";

// if($mail->send()) {
//     $_SESSION["success"] = "Mensagem enviada com sucesso";
//     header("Location: index.php");
// } else {
//     $_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
//     header("Location: contato.php");
// }
// die();



error_reporting ( E_ALL );

include "PHPMailerAutoload.php"; 
// cleitonalves@gmail.com
// Webibiapaba2@19

$mail = new PHPMailer(); 
$mail->SMTPDebug = 1;
$mail->IsSMTP(); 
$mail->Host = "smtps.uol.com.br"; 
$mail->SMTPAuth = true; 
$mail->Port = 465;
$mail->SMTPSecure = "tls";
$mail->Username = "cleitonalves@gmail.com";
$mail->Password = "Webibiapaba2@19"; 
$mail->SMTPOptions = array( "ssl" => array( "verify_peer" => false, "verify_peer_name" => false, "allow_self_signed" => true ) ); 
$mail->From = "smtp@ibiapabasp.com.br";
$mail->FromName = "Ibiapaba"; 

// $mail->AddAddress("az.abraao@gmail.com", "Abraao"); 
$mail->IsHTML(true);

$mail->CharSet = "UTF-8"; 
$mail->Subject = "Assinatura de Newsletter"; 
$mail->clearAddresses();
$mail->Body = "Alguém assinou sua newsletter. <br/> email:".$email;

$mail->AddAddress("az.abraao@gmail.com", "Ivens");

$enviado = $mail->Send() or die("Erro no envio aos destinarários finais".$mail->ErrorInfo);

if ($enviado) { 
    echo "Seu email foi enviado com sucesso!"; 
} else { 
    echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
} 




//     $mail->Host       = 'smtps.uol.com.br';                    // Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//     $mail->Username   = 'smtp@ibiapabasp.com.br';                     // SMTP username
//     $mail->Password   = 'Tn2omdw2i';                               // SMTP password
//     $mail->Port       = 587;        

// error_reporting ( E_ALL );
// include "PHPMailerAutoload.php"; 
// $mail = new PHPMailer(); 
// $mail->SMTPDebug = 1;
// $mail->IsSMTP(); 
// $mail->Host = "smtps.uol.com.br";
// $mail->SMTPAuth = true; 
// $mail->Port = 465;
// $mail->SMTPSecure = 'tls';
// $mail->Username = "smtp@ibiapabasp.com.br";
// $mail->Password = 'Tn2omdw2i'; 
// $mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 
// $mail->From = "ibiapabasp@ibiapabasp.com.br";
// $mail->FromName = "Ibiapaba"; 
// $mail->AddAddress("az.abraao@gmail.com", "Abraao"); 
// $mail->IsHTML(true);
// $mail->CharSet = 'UTF-8'; 
// $mail->Subject = "Alguém entrou em contato pelo site"; 
// $mail->clearAddresses();
// $mail->Body = "
//   nome: ".$nome."<br/>
//   email: ".$email."<br/>
//   telefone: ".$telefone."<br/>
//   assunto: ".$assunto."<br/>
//   mensage: ".$mensagem."<br/>
//   como até nós: ".$como_conheceu."<br/>";
// $mail->AddAddress('az.abraao@gmail.com', 'Abraão');
// $enviado = $mail->Send() or die('Erro no envio aos destinarários finais'.$mail->ErrorInfo);
// if ($enviado) { 
//     echo "Seu email foi enviado com sucesso!"; 
// } else { 
//     echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
// }


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

// include "PHPMailerAutoload.php"; 


// Instantiation and passing `true` enables exceptions
// $mail = new PHPMailer(true);

// try {
//     // //Server settings
//     $mail->isSMTP();                                            // Send using SMTP
//     $mail->Host       = 'smtps.uol.com.br';                    // Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//     $mail->Username   = 'smtp@ibiapabasp.com.br';                     // SMTP username
//     $mail->Password   = 'Tn2omdw2i';                               // SMTP password
//     $mail->Port       = 587;                                    // TCP port to connect to
    
//     // $mail->IsSMTP(); // Define que a mensagem será SMTP 
//     // $mail->Host = "smtp.sparkpostmail.com";
//     // $mail->Port = 2525;
//     // $mail->SMTPAuth = true;
//     // $mail->Username = 'SMTP_Injection';
//     // $mail->Password = 'Tn2omdw2i'; 
//     // $mail->Security = 'TLS';
     


//     //Recipients
//     $mail->setFrom('smtp@ibiapabasp.com.br', 'Site Ibiapaba');
//     $mail->addAddress('az.abraao@gmail.com', 'Abraão');     // Add a recipient
//     // $mail->addReplyTo('az.abraao@gmail.com', 'Information');

//     // Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = 'Here is the subject';
//     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }