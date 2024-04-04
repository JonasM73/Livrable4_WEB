<?php

require_once "Assets/PHP/SQLConnection.php";

class Compte extends SQLconnection {
    public function __construct() {        parent::__construct();    }

    public function créer_compte($nom, $prenom, $type, $login, $mdp, $promo, $centre ) {
        $query = "INSERT INTO Utilisateur (nom_utilisateur, prenom_utilisateur, utilisateur_type, utilisateur_login, utilisateur_MDP) 
                VALUES (:nom, :prenom, :u_type, :u_login , :pass);
                INSERT INTO Assigner (id_utilisateur, id_promotion) 
                VALUES ((SELECT id_utilisateur FROM Utilisateur WHERE utilisateur_login = :u_login AND utilisateur_MDP = :pass),
                (SELECT id_promotion FROM Promotions WHERE nom_promotion = :promo));
                INSERT INTO Contenir (id_utilisateur, id_Ville) 
                VALUES (    (SELECT id_utilisateur FROM Utilisateur WHERE utilisateur_login = :u_login AND utilisateur_MDP = :pass),    
                (SELECT id_Ville FROM Ville WHERE nom_Ville = :centre));";
        $stmt = $this->getBDD()->prepare($query);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':u_type', $type);
        $stmt->bindParam(':u_login', $login);
        $stmt->bindParam(':pass', $mdp);
        $stmt->bindParam(':promo', $promo);
        $stmt->bindParam(':centre', $centre);
        $success = $stmt->execute();
    
    // Vérifier si l'exécution de la requête a réussi
    if ($success) {
        return true;
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