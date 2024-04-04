<?php 
require_once "Assets/PHP/SQLConnection.php";

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

class Utilisateur_Connexion {
    private $id_Utilisateur;
    private $nom_utilisateur;
    private $prenom_utilisateur;
    private $utilisateur_type;
    private $utilisateur_login;
    private $utilisateur_MDP;

    // Setters
    public function setid_Utilisateur($id_Utilisateur) {$this->id_Utilisateur = $id_Utilisateur; }
    public function setnom_utilisateur($nom_utilisateur) {$this->nom_utilisateur = $nom_utilisateur; }
    public function setprenom_utilisateur($prenom_utilisateur) {$this->prenom_utilisateur = $prenom_utilisateur; }
    public function setutilisateur_type($utilisateur_type) {$this->utilisateur_type = $utilisateur_type; }
    public function setutilisateur_login($utilisateur_login) {$this->utilisateur_login = $utilisateur_login; }
    public function setutilisateur_MDP($utilisateur_MDP) {$this->utilisateur_MDP = $utilisateur_MDP; }

    // Getters
    public function getid_Utilisateur() {return $this->id_Utilisateur; }
    public function getnom_utilisateur() {return $this->nom_utilisateur; }
    public function getprenom_utilisateur() {return $this->prenom_utilisateur; }
    public function getutilisateur_type() {return $this->utilisateur_type; }
    public function getutilisateur_login() {return $this->utilisateur_login; }
    public function getutilisateur_MDP() {return $this->utilisateur_MDP; }
}