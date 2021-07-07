<?php

if(!isset($session->username) && empty($_GET['id'])) {
	header("Location: index.php?p=home");
}

$dao->setTable("services");

$service = $dao->find($_GET['id'], "id");

$array = array("name" => "", "success" => "");
$headers = array("name" => "", "category_id" => "");

$isSucces = true;

if($_SERVER["REQUEST_METHOD"] == "POST"){

	if(empty($_POST["name"])){
		$isSucces = false;
		$array['name'] = $form->messageError('Este campo é obrigatorio');
	} else {
		if($_POST["name"] === $service->name && $_POST['categories_options'] === $service->category_id){
			$isSucces = false;
			$array['success'] = $form->messageError("Nada foi alterado");
		} else {
			$headers['name'] = $_POST['name'];
		}
	}

	$headers['category_id'] = $_POST['categories_options'];

	if($isSucces){
		$dao->setTable("services");
		$dao->update($service->id,$headers);
		$array['success'] = $form->messageSuccess('O serviço foi alterado com sucesso !');
		$service = $dao->find($_GET['id'], "id");
	}

}

?>

<div class="container-fluid">

	<h1 class="text-dark text-center">Ediçao do serviço "<?= $service->name; ?>"</h1>
	<br>

	<form method="POST" action="" class="text-center">
		
		<?= $array["success"];?>

		<?= $form->input('name', 'Nome do serviço',[], $service->name);?>
		<?= $array["name"];?>
		

		<label for="">Categoria</label>
		<select  class="form-select" name="categories_options" id="">
			<?php
				$dao->setTable("category");
				foreach($dao->all() as $category):
				?>
			<option <?=$service->category_id === $category->id ? "selected" : ""; ?> value="<?=$category->id;?>"><?=$category->name;?></option>
			<?php endforeach;?>
		</select>
		
		<br>
		<?= $form->submit('Alterar', 'primary');?><br>

	</form>

</div>