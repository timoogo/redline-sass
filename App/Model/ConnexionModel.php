<?php
namespace App\Model;

use Core\Database;

class ConnexionModel extends Database{

    public function login($mailConnect, $passwordConnect){
        // Select users informations to check the connexion 
        $signIn = $this->query("SELECT * FROM users WHERE user_email = '$mailConnect' AND user_password = '$passwordConnect'");
        return ($signIn);
    }

    public function isOnline($me, $isOnline){
        // When user is connected, user is set online 
        $poll = $this->pdo->query("UPDATE users SET user_isOnline = '$isOnline' WHERE user_id = '$me'");
     
    }

    
}



