<?php
use App\Controller\MainController;


if (array_key_exists("page", $_GET)) {

    switch ($_GET["page"]) {
        case 'main':
           
        }
        //display default page
    }else{
        $controller = new MainController();
        $controller->render();
    }
    ?>
