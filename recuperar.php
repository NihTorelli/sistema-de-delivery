<?php

include_once("conexao.php");

$email_usuario = $_POST['email'];

    $res = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");

    $res->bindValue(":usuario", $email_usuario);
    $res->execute();

    $dados = $res->fetchAll(PDO::FETCH_ASSOC);
    $linhas = count($dados);

    if ($linhas > 0) {
        $nome_usu = $dados[0]['nome'];
        $senha_usu = $dados[0]['senha'];
        $nivel_usu = $dados[0]['nivel'];
    }else {
        echo 'Este e-mail não está cadastrado no sistema!';
    }

    //CÓDIGO DE ENVIO DE E-MAIL
    $to = $email_usuario;
    $subject = 'Recuperação de Senha Delivery Torelli';

    $message = "
    Olá $nome_usu!!<br><br>
    Sua senha é <b>$senha_usu </b><br><br>
    Ir para o Sistema -> <a href='$url_site' target='_blank'>Clique Aqui </a>
    ";

    $remetente = $email_adm;
    $headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8;' . "\r\n";
	$headers .= "From: " .$remetente;
	@mail($to, $subject, $message, $headers);

?>
