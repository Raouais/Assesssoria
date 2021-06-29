<?php
if(!isset($session->username)) {
	header("Location: index.php?p=home");
}

$dao->setTable("services");

$array = array("name" => "", "success" => "");
$headers = array("name" => "", "category_id" => "");
$isSucces = true;

if($_SERVER["REQUEST_METHOD"] == "POST"){

	if(empty($_POST["name"])){
		$isSucces = false;
		$array['name'] = $form->messageError('Este campo é obrigatorio');
	} else {    
        $headers['name'] = $_POST['name'];
	}
    
	$headers['category_id'] = $_POST['categories_options'];

	if($isSucces){
		$dao->setTable("services");
		$dao->create($headers);
		$array['success'] = $form->messageSuccess('O serviço foi adicionado com sucesso !');
	}
}
?>


<div class="container-fluid">

	<h1 class="text-dark text-center">Adicionar um novo serviço</h1>
	<br>

	<form method="POST" action="" class="text-center">
		
		<?= $array["success"];?>

		<?= $form->input('name', 'Nome do serviço');?>
		<?= $array["name"];?>
		
        <label for="">Categoria</label>
		<select  class="form-select" name="categories_options" id="">
			<?php
				$dao->setTable("category");
				foreach($dao->all() as $category):
				?>
			<option value="<?=$category->id;?>"><?=$category->name;?></option>
			<?php endforeach;?>
		</select>
		
		<br>
		<?= $form->submit('Adicionar', 'primary');?><br>

	</form>

</div>