<?php
$array = array("name" => "", "password" => "", "error" => "");
$isSuccess = true;
if($_SERVER["REQUEST_METHOD"] == "POST"){

	if(empty($_POST["name"])){
		$array["name"] = $form->messageError("Este campo é obrigatório");
		$isSucces = false;
	} 
	
	if(empty($_POST['password'])){
		$array["password"] = $form->messageError("Este campo é obrigatório");
		$isSucces = false;	
	} 

	if($isSuccess){
		$dao->setTable('user');
		$user = $dao->find($_POST['name'],'name');
		if($user){
			if(password_verify($_POST['password'], $user->password)){
				$session->username = $user->name;
				$session->userId = $user->id;
				header('Location: index.php?p=home');
			} else {
				$array["error"] = $form->messageError("Não foi possivel se conectar");
			}
		} else {
			$array["error"] = $form->messageError("Não foi possivel se conectar");
		}
	}
}

?>

<div class="container d-flex justify-content-center">
	<div class="row">
	<h1>Conexão</h1>
		<form method="POST">
			<?= $array["error"]?>
			<?= $form->input('name', 'Nome do usuário');?>
			<?= $array["name"]?>
			<?= $form->input('password', 'Palavra passe',['type' =>'password']);?>
			<?= $array["password"]?>
			<br>
			<?= $form->submit('Se conectar', 'primary');?><br>
		</form>
	</div>  
</div>
