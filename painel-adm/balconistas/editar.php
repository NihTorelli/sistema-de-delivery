<?php 

require_once("../../conexao.php");
@session_start();

$id = $_POST['id'];
$reg_antigo = $_POST['reg_antigo'];

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




if($reg_antigo != $cpf){
	//verificar duplicidade de dados
	$res = $pdo->query("SELECT * from usuarios where cpf = '$cpf'");
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);
	$linhas = count($dados);
	if($linhas > 0){
		echo 'Registro já Cadastrado';
		exit();
	}
}


 	$res = $pdo->prepare("UPDATE usuarios SET nome = :nome, cpf = :cpf, telefone = :telefone, usuario = :usuario where id = :id");
 

	
	$res->bindValue(":nome", $nome);
	$res->bindValue(":cpf", $cpf);
	$res->bindValue(":telefone", $telefone);
	$res->bindValue(":usuario", $usuario);
	
	$res->bindValue(":id", $id);
	
	$res->execute();

	

	echo "Editado com Sucesso!!";


?>