<?php

require '../app/App.php';

App\App::load();


//page d'acceuil
if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}


// objets que l'on va utiliser dans les pages
$dao = new App\DAO(new App\Database('assessoria'));
$form = new HTML\Bootstrap();
$session = App\Session::getInstance();


//ob_start prend tout ce qui sera exigé (require) et le met dans une seule variable
ob_start();

// === vérification strict
if($p === 'home'){
    require '../pages/home.php';
} else if($p === 'connection'){
    require '../pages/connection.php';
} else if($p === 'disconnection'){
    require '../pages/disconnection.php';
} else if($p === 'about'){
    require '../pages/about.php';
} else if($p === 'contact'){
    require '../pages/contact.php';
} else if($p === 'edit_category'){
    require '../pages/admin/edit_category.php';
} else if($p === 'edit_services'){
    require '../pages/admin/edit_services.php';
} else if($p === 'reset_password'){
    require '../pages/admin/reset_password.php';
}

$content = ob_get_clean();
require '../template/default.php';

