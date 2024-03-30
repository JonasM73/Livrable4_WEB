<?php

class Utilisateur_fonctions {
    private $BDD;

    public function __construct() {
    try{
        $dns = 'mysql:host=localhost;dbname=wk';
        $this->BDD = new PDO($dns, 'root', 'cesi');
        $this->BDD->exec("SET NAMES utf8");
        $this->BDD->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }catch(Exception $e){$e->getMessage();}
}

    public function getUtilisateurs() {}

    public function ajouterUtilisateur() {}

    public function supprimerUtilisateur() {}
    
}

class Utilisateur {
    private $NomPil;
    private $NatPil;
    private $NomTV;
    private $NomGP;
    private $LieuCirc;
    private $DateGP;
    private $RecTour;
    private $Place;
    private $PtObt;

    // Setters
    public function setNomPil($NomPil) {        $this->NomPil = $NomPil;    }
    public function setNatPil($NatPil) {        $this->NatPil = $NatPil;    }
    public function setNomTV($NomTV) {        $this->NomTV = $NomTV;    }
    public function setNomGP($NomGP) {        $this->NomGP = $NomGP;    }
    public function setLieuCirc($LieuCirc) {        $this->LieuCirc = $LieuCirc;    }
    public function setDateGP($DateGP) {        $this->DateGP = $DateGP;    }
    public function setRecTour($RecTour) {        $this->RecTour = $RecTour;    }    
    public function setPlace($Place) {        $this->Place = $Place;    }
    public function setPtObt($PtObt) {        $this->PtObt = $PtObt;    }
    // Getters
     public function getNomPil() {        return $this->NomPil;    }
    public function getNatPil() {        return $this->NatPil;    }
    public function getNomTV() {        return $this->NomTV;    }
    public function getNomGP() {        return $this->NomGP;    }
    public function getLieuCirc() {        return $this->LieuCirc;    }
    public function getDateGP() {        return $this->DateGP;    }
    public function getRecTour() {        return $this->RecTour;    }
    public function getPlace() {        return $this->Place;    }
    public function getPtObt() {        return $this->PtObt;    }
}