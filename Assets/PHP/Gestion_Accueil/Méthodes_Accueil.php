<?php

class Accueil_offre {
    private $BDD;

    public function __construct() {
    try{
        $dns = 'mysql:host=localhost;dbname=projet_web';
        $this->BDD = new PDO($dns, 'root', 'cesi');
        $this->BDD->exec("SET NAMES utf8");
        $this->BDD->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }catch(Exception $e){$e->getMessage();}
}

    public function Afficher_Nom_Offre() {
        $sql = "SELECT titre_offre_stage FROM offre_stage;";
        $requete = $this->BDD->query($sql);
        $Nom_offres = array();
        while ($row = $requete->fetch()) {
            $Nom_offre = new Offre();
            $Nom_offre->settitre_offre_stage($row['titre_offre_stage']);
            $Nom_offres[] = $Nom_offre;
        }
        return $Nom_offres;
    }
    public function Afficher_descriptif_Offre() {
        $sql2 = "SELECT Descriptif_offres_stage FROM offre_stage;";
        $requete2 = $this->BDD->query($sql2);
        $descriptif_offres = array();
        while ($row = $requete2->fetch()) {
            $descriptif_offre = new Offre();
            $descriptif_offre->setdescriptif_offres_stage($row['Descriptif_offres_stage']);
            $descriptif_offres[] = $descriptif_offre;
        }
        return $descriptif_offres;
    }


    
}

class Offre {
    private $titre_offre_stage;
    private $Stage_Date_depart;
    private $descriptif_offres_stage;
    private $Stage_Date_fin;
    private $Remuneration;
    private $Date_publication;
    private $NB_places_restantes;

    // Setters
    public function settitre_offre_stage($titre_offre_stage) {                      $this->titre_offre_stage = $titre_offre_stage;    }
    public function setStage_Date_depart($Stage_Date_depart) {                      $this->Stage_Date_depart = $Stage_Date_depart;    }
    public function setdescriptif_offres_stage($descriptif_offres_stage) {          $this->descriptif_offres_stage = $descriptif_offres_stage;    }
    public function setStage_Date_fin($Stage_Date_fin) {                            $this->Stage_Date_fin = $Stage_Date_fin;    }
    public function setRemuneration($Remuneration) {                                $this->Remuneration = $Remuneration;    }
    public function setDate_publication($Date_publication) {                        $this->Date_publication = $Date_publication;    }
    public function setNB_places_restantes($NB_places_restantes) {                  $this->NB_places_restantes = $NB_places_restantes ;    }
    // Getters
    public function gettitre_offre_stage() {                                return $this->titre_offre_stage;    }
    public function getStage_Date_depart() {                                return $this->Stage_Date_depart;    }
    public function getdescriptif_offres_stage() {                          return $this->descriptif_offres_stage;    }
    public function getStage_Date_fin() {                                   return $this->Stage_Date_fin;    }
    public function getRemuneration() {                                     return $this->Remuneration;    }
    public function getDate_publication() {                                 return $this->Date_publication;    }
    public function getNB_places_restantes() {                              return $this->NB_places_restantes;    }
}



?>