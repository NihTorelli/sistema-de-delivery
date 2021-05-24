<?php 

require_once("../../conexao.php");
@session_start();


$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$usuario = $_POST['usuario'];
$cpf_sem_traco = preg_replace('/[^0-9]/', '', $cpf);




if($nome == ''){
	echo "Preencha o Nome!";
	exit();
}

if($cpf == ''){
	echo "Preencha o CPF!";
	exit();
}

if($telefone == ''){
	echo "Preencha o Telefone!";
	exit();
}

if($usuario == ''){
	echo "Preencha o E-mail!";
	exit();
}






	//verificar duplicidade de dados
	$res = $pdo->query("SELECT * from usuarios where cpf = '$cpf'");
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);
	$linhas = count($dados);
	if($linhas > 0){
		echo 'Registro já Cadastrado';
		exit();
	}


	$res = $pdo->prepare("INSERT into usuarios (nome, cpf, telefone, usuario, senha, nivel) values (:nome, :cpf, :telefone, :usuario, :senha, :nivel)");

	
	$res->bindValue(":nome", $nome);
	$res->bindValue(":cpf", $cpf);
	$res->bindValue(":telefone", $telefone);
	$res->bindValue(":usuario", $usuario);
	$res->bindValue(":senha", md5($cpf_sem_traco));
	$res->bindValue(":nivel", 'Balconista');

	
	$res->execute();

	

	echo "Cadastrado com Sucesso!!";



?>