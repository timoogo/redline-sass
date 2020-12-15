<?php 
namespace App\Controller;
use App\Model\MainModel;
class MainController{
    public function __construct()
    {
        $this->model = new MainModel();
    }

    public function render(){

        require ROOT."/App/View/MainView.php";
        }
    }
