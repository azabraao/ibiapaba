<?php
$nome = $_POST['nome']; 
$email = $_POST['email']; 
$telefone = $_POST['telefone']; 
$como_conheceu = $_POST['como_conheceu']; 
$assunto = $_POST['assunto']; 
$mensagem = "
<h1>Contato via site</h1> <br/>
<b>Nome:</b> ".$nome."<br/>
<b>Telefone:</b> ".$telefone." <br/>
<b>Como chegou a nós:</b> ".$como_conheceu." <br/>
<b>Mensagem:</b> ".$_POST['mensagem']."
";

$destino = "ibiapabasp@ibiapabasp.com.br";
$remetente = $destino;
$mensagem = $mensagem;
$subject = $assunto;
$origem = $email;
$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/html; charset=utf-8\n";
$headers .= "From: " . $remetente . "\n";
$headers .= "Reply-To: " . $origem . "\n";

mail($destino, $subject, $mensagem, $headers);