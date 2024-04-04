<?php 
require_once "Assets/PHP/SQLConnection.php";
require_once "Assets/PHP/Gestion_Compte/methodes_Compte.php";


class Acces extends SQLconnection {
    public function __construct() {        parent::__construct();    }

    public function Connexion($email, $password) {
        $query = "SELECT * FROM utilisateur WHERE utilisateur_login = :email";
        $stmt = $this->getBDD()->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        // Vérifier si l'utilisateur existe
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $user['utilisateur_MDP'])) {
                return $user;
            } else {  
                return false;   
            }
        } else {  
            return false;        
        }
    }
}
