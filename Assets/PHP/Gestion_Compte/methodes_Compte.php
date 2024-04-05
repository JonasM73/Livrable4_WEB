<?php

require_once "Assets/PHP/SQLConnection.php";
require_once "Assets/PHP/Gestion_entreprises/methodes_entreprise.php";


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

    public function afficher_compte_etudiant() {
        $sql = "SELECT nom_utilisateur, prenom_utilisateur, nom_Ville, nom_promotion FROM projet_web.utilisateur u
                Join contenir c on c.id_utilisateur=u.id_utilisateur
                Join ville v on v.id_Ville=c.id_Ville
                join assigner a on a.id_utilisateur = u.id_utilisateur
                join promotions p on p.id_promotion= a.id_promotion
                where utilisateur_type='Etudiant';";
        $requete = $this->getBDD()->prepare($sql);
        $requete->execute(); // Exécuter la requête SQL

        $offres = array();

        while ($row = $requete->fetch()) {
            $offre = new Utilisateur_Connexion();
            $offre->setnom_utilisateur($row['nom_utilisateur']);
            $offre->setprenom_utilisateur($row['prenom_utilisateur']);
            $offre->setutilisateur_ville($row['nom_Ville']);
            $offre->setutilisateur_promotion($row['nom_promotion']);
            $offres[] = $offre;
        }
        return $offres;
    }
    public function afficher_compte_Pilotes() {
        $sql = "SELECT nom_utilisateur, prenom_utilisateur, nom_Ville, nom_promotion FROM projet_web.utilisateur u
                Join contenir c on c.id_utilisateur=u.id_utilisateur
                Join ville v on v.id_Ville=c.id_Ville
                join assigner a on a.id_utilisateur = u.id_utilisateur
                join promotions p on p.id_promotion= a.id_promotion
                where utilisateur_type='Pilote';";
        $requete = $this->getBDD()->prepare($sql);
        $requete->execute(); // Exécuter la requête SQL

        $offres = array();

        while ($row = $requete->fetch()) {
            $offre = new Utilisateur_Connexion();
            $offre->setnom_utilisateur($row['nom_utilisateur']);
            $offre->setprenom_utilisateur($row['prenom_utilisateur']);
            $offre->setutilisateur_ville($row['nom_Ville']);
            $offre->setutilisateur_promotion($row['nom_promotion']);
            $offres[] = $offre;
        }
        return $offres;
    }
    public function afficher_un_compte_etudiant($nom, $prenom, $centre, $promo) {
        $sql = "SELECT nom_utilisateur, prenom_utilisateur, nom_Ville, nom_promotion FROM projet_web.utilisateur u
                Join contenir c on c.id_utilisateur=u.id_utilisateur
                Join ville v on v.id_Ville=c.id_Ville
                join assigner a on a.id_utilisateur = u.id_utilisateur
                join promotions p on p.id_promotion= a.id_promotion
                where utilisateur_type='Etudiant' 
                AND nom_Ville like :centre 
                AND nom_utilisateur LIKE :nom
                AND prenom_utilisateur LIKE :prenom 
                AND nom_promotion LIKE :promo ;";
        $requete = $this->getBDD()->prepare($sql);
        $requete->bindParam(':centre', $centre);
        $requete->bindParam(':nom', $nom);
        $requete->bindParam(':prenom', $prenom);
        $requete->bindParam(':promo', $promo);
        $requete->execute(); // Exécuter la requête SQL

        $offres = array();

        while ($row = $requete->fetch()) {
            $offre = new Utilisateur_Connexion();
            $offre->setnom_utilisateur($row['nom_utilisateur']);
            $offre->setprenom_utilisateur($row['prenom_utilisateur']);
            $offre->setutilisateur_ville($row['nom_Ville']);
            $offre->setutilisateur_promotion($row['nom_promotion']);
            $offres[] = $offre;
        }
        return $offres;
    }
    public function afficher_un_compte_Pilote($nom, $prenom, $centre, $promo) {
        $sql = "SELECT nom_utilisateur, prenom_utilisateur, nom_Ville, nom_promotion FROM projet_web.utilisateur u
                Join contenir c on c.id_utilisateur=u.id_utilisateur
                Join ville v on v.id_Ville=c.id_Ville
                join assigner a on a.id_utilisateur = u.id_utilisateur
                join promotions p on p.id_promotion= a.id_promotion
                where utilisateur_type='Pilote' 
                AND nom_Ville like :centre 
                AND nom_utilisateur LIKE :nom
                AND prenom_utilisateur LIKE :prenom 
                AND nom_promotion LIKE :promo ;";
        $requete = $this->getBDD()->prepare($sql);
        $requete->bindParam(':centre', $centre);
        $requete->bindParam(':nom', $nom);
        $requete->bindParam(':prenom', $prenom);
        $requete->bindParam(':promo', $promo);
        $requete->execute(); // Exécuter la requête SQL

        $offres = array();

        while ($row = $requete->fetch()) {
            $offre = new Utilisateur_Connexion();
            $offre->setnom_utilisateur($row['nom_utilisateur']);
            $offre->setprenom_utilisateur($row['prenom_utilisateur']);
            $offre->setutilisateur_ville($row['nom_Ville']);
            $offre->setutilisateur_promotion($row['nom_promotion']);
            $offres[] = $offre;
        }
        return $offres;
    }


    public function stat_etudiant_promo() {
        $sql = "SELECT count(nom_utilisateur) as nombre_utilisateur, nom_promotion FROM projet_web.assigner a
                join utilisateur u on u.id_utilisateur = a.id_utilisateur
                join promotions p on p.id_promotion = a.id_promotion
                Group by nom_promotion
                order by nombre_utilisateur desc";
        $requete = $this->getBDD()->prepare($sql);
        $requete->execute();

        $offres = array();
        while ($row = $requete->fetch()) {
            $offre = new xy();
            $offre->set_x($row['nom_promotion']);
            $offre->set_y($row['nombre_utilisateur']);
            $offres[] = $offre;
        }
        return $offres;
    }
    public function stat_etudiant_localité() {
        $sql = "SELECT count(nom_utilisateur) as nombre_utilisateur, nom_Ville FROM projet_web.contenir c
                join utilisateur u on u.id_utilisateur=c.id_utilisateur
                join ville v on v.id_ville= c.id_ville	
                group by nom_Ville
                order by nombre_utilisateur desc";
        $requete = $this->getBDD()->prepare($sql);
        $requete->execute();

        $offres = array();
        while ($row = $requete->fetch()) {
            $offre = new xy();
            $offre->set_x($row['nom_Ville']);
            $offre->set_y($row['nombre_utilisateur']);
            $offres[] = $offre;
        }
        return $offres;
    }

}

class Utilisateur_Connexion {
    private $id_Utilisateur;
    private $nom_utilisateur;
    private $prenom_utilisateur;
    private $utilisateur_type;
    private $utilisateur_login;
    private $utilisateur_MDP;
    private $utilisateur_ville;
    private $utilisateur_promotion;


    // Setters
    public function setid_Utilisateur($id_Utilisateur) {$this->id_Utilisateur = $id_Utilisateur; }
    public function setnom_utilisateur($nom_utilisateur) {$this->nom_utilisateur = $nom_utilisateur; }
    public function setprenom_utilisateur($prenom_utilisateur) {$this->prenom_utilisateur = $prenom_utilisateur; }
    public function setutilisateur_type($utilisateur_type) {$this->utilisateur_type = $utilisateur_type; }
    public function setutilisateur_login($utilisateur_login) {$this->utilisateur_login = $utilisateur_login; }
    public function setutilisateur_MDP($utilisateur_MDP) {$this->utilisateur_MDP = $utilisateur_MDP; }
    public function setutilisateur_ville($utilisateur_ville) {$this->utilisateur_ville = $utilisateur_ville; }
    public function setutilisateur_promotion($utilisateur_promotion) {$this->utilisateur_promotion = $utilisateur_promotion; }

    // Getters
    public function getid_Utilisateur() {return $this->id_Utilisateur; }
    public function getnom_utilisateur() {return $this->nom_utilisateur; }
    public function getprenom_utilisateur() {return $this->prenom_utilisateur; }
    public function getutilisateur_type() {return $this->utilisateur_type; }
    public function getutilisateur_login() {return $this->utilisateur_login; }
    public function getutilisateur_MDP() {return $this->utilisateur_MDP; }
    public function getutilisateur_ville() {return $this->utilisateur_ville; }
    public function getutilisateur_promotion() {return $this->utilisateur_promotion; }

}