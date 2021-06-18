<?php

// if(!isset($session->username) && empty($_GET['id'])) {
// 	header("Location: index.php");
// }

$array =  array("current_pwd" => "","new_pwd" => "","confirm_pwd" => "", "success" => "");
$isSucces = true;


if($_SERVER["REQUEST_METHOD"] == "POST"){
	$dao->setTable('user');
	$user = $dao->find($session->username, 'username');

	if(empty($_POST["current_pwd"])){
		$array["current_pwd"] = $form->messageError("Este campo é obrigatório");
		$isSucces = false;
	} else if(!password_verify($_POST['current_pwd'], $user->password)) {
		$array["current_pwd"] = $form->messageError("Não foi possivel se connectar");
		$isSucces = false;
	}

	if(empty($_POST['new_pwd'])){
		$array["new_pwd"] = $form->messageError("Este campo é obrigatório");
		$isSucces = false;
	} else {
		$uppercase = preg_match('@[A-Z]@', $_POST["new_pwd"]);
		$lowercase = preg_match('@[a-z]@', $_POST["new_pwd"]);
		$number    = preg_match('@[0-9]@', $_POST["new_pwd"]);
		if(!$uppercase || !$lowercase || !$number || strlen($_POST["new_pwd"]) < 8){
			$array["new_pwd"] = $form->messageError("Tem que ter pelo menos : 8 caracteres, 1 letra maiuscula e 1 digito");
			$isSucces = false;
		} else {
			$fields['new_pwd'] = password_hash($_POST['new_pwd'], PASSWORD_DEFAULT);
		}
	}

	if(empty($_POST['confirm_pwd'])){
		$array["confirm_pwd"] = $form->messageError("Este campo é obrigatório");
		$isSucces = false;
	}

	if(!empty($_POST['new_pwd']) && !empty($_POST['confirm_pwd']) && $_POST['new_pwd'] != $_POST['confirm_pwd']){
		$array["comfirm_password"] = $form->messageError("Não foi possivel se connectar");
		$isSucces = false;
	}

	if($isSucces){
		$fields = ['password' => password_hash($_POST['new_pwd'], PASSWORD_DEFAULT)];
		$dao->update($user->id,$fields);
		$array['success'] = $form->messageSuccess("Sua senha foi alterada com sucesso !");
	}
}
?>

<div class="container">
	<div class="row">
		<h1 id="form_mdp">Alterar palavra chave</h1>

		<form method="POST" action="" class="col-md-4">
		
			<?= $array["success"];?>
			<?= $form->input('current_pwd', 'Palavra chave atual',['type' =>'password']);?>
			<?= $array["current_pwd"];?>
			<?= $form->input('new_pwd', 'Nova palavra chave',['type' =>'password']);?>
			<?= $array["new_pwd"]; ?>
			<?= $form->input('confirm_pwd', 'Confirmar nova palavra chave',['type' =>'password']);?>
			<?= $array["confirm_pwd"]; ?>
			<br>
			<?= $form->submit('Alterar', 'primary');?><br>
		</form>
	</div>
</div>