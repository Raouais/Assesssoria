<?php

$array = [
    "name" => "",
    "surname" => "",
    "email" => "",
    "object" => "",
    "message" => "",
    "success" => "",
];

$emailTo = "gustavoraissa@hotmail.com";
$emailText = "";

$isSuccess = true;
if($_SERVER["REQUEST_METHOD"] == "POST"){

	if(empty($_POST["name"])){
		$array["name"] = $form->messageError("Este campo é obrigatório");
		$isSucces = false;
	} else {
        $emailText .= "Nome: $name\n";
    }
	
	if(empty($_POST['surname'])){
		$array["surname"] = $form->messageError("Este campo é obrigatório");
		$isSucces = false;	
	}  else {
        $emailText .= "Sobrenome: $surname\n";
    }
    
	if(empty($_POST['object'])){
        $array["object"] = $form->messageError("Este campo é obrigatório");
		$isSucces = false;	
	} 
    
	if(empty($_POST["email"])){
        $array["email"] = $form->messageError("Ce champ est requis !");
		$isSucces = false;
	} else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $array["email"] = $form->messageError("Email non valide !");
	} else {
        $emailText .= "Email: $email\n";
    }
    
    if(empty($_POST['message'])){
        $array["message"] = $form->messageError("Este campo é obrigatório");
        $isSucces = false;	
    } else {
        $emailText .= "Mensagem: $message\n";
    }

    if($isSucces){
        $headers = "From: $name $surname <$email>\nReply-To: $email";
        mail($emailTo,"Mensagem do site: ".$object, $emailText, $headers);
        $array["success"] = $form->messageSuccess("Seu email foi enviado com sucesso !");
        foreach ($array as $key => $value) {
            $key = "";
        }
    }
}




?>
<section id="contact">
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15288.38918828607!2d-49.2159172!3d-16.6720139!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x85e256bb7c2a575a!2sDin%C3%A2mica%20Assessoria%20Cont%C3%A1bil!5e0!3m2!1sfr!2sbr!4v1624534254020!5m2!1sfr!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    
    <h1 class="text-center">Contate-Nos</h1>
    <div class="container d-flex justify-content-center">
            <form method="POST">
                <div class="container">
                    <?= $array["success"]?>
                    <din class="row">
                        <div class="col-md-6">
                            <?= $form->input('name', 'Nome');?>
                            <?= $array["name"];?>
                            <?= $form->input('surname', 'Sobrenome');?>
                            <?= $array["surname"];?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->input('email', 'Seu email',["type" => "email"]);?>
                            <?= $array["email"];?>
                            <?= $form->input('object', 'Assunto');?>
                            <?= $array["object"]?>
                        </div>
                        <?= $form->input('message', 'Mensagem',["type" => "textarea"]);?>
                        <?= $array["message"];?>
                        
                        <?= $form->submit('Enviar', 'primary');?><br>
                    </din>
                </div>
            </form>
    </div>

</section>