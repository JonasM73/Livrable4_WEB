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
        $sql = "SELECT id_Offre_stage,titre_offre_stage, nom_entreprise FROM offre_stage os join entreprise e on e.id_entreprise= os.id_entreprise
        order by titre_offre_stage asc;";
        $requete = $this->BDD->query($sql);
        $Nom_offres = array();
        while ($row = $requete->fetch()) {
            $Nom_offre = new Offre();
            $Nom_offre->settitre_offre_stage($row['titre_offre_stage']);
            $Nom_offre->setnom_entreprise($row['nom_entreprise']);
            $Nom_offre->setid_offre($row['id_Offre_stage']);
            $Nom_offres[] = $Nom_offre;
        }
        return $Nom_offres;
    }
    public function Afficher_descriptif_Offre() {
        $sql2 = "SELECT Descriptif_offres_stage FROM offre_stage order by titre_offre_stage asc;";
        $requete2 = $this->BDD->query($sql2);
        $descriptif_offres = array();
        while ($row = $requete2->fetch()) {
            $descriptif_offre = new Offre();
            $descriptif_offre->setdescriptif_offres_stage($row['Descriptif_offres_stage']);
            $descriptif_offres[] = $descriptif_offre;
        }
        return $descriptif_offres;
    }
    public function Afficher_Date() {
        $sql3 = "SELECT CEILING(DATEDIFF(Stage_Date_fin, Stage_Date_depart) / 7) as Diff FROM offre_stage order by titre_offre_stage asc;";
        $requete3 = $this->BDD->query($sql3);
        $Nom_offres = array();
        while ($row = $requete3->fetch()) {
            $Nom_offre = new Offre();
            $Nom_offre->setStage_Date($row['Diff']);
            $Nom_offres[] = $Nom_offre;
        }
        return $Nom_offres;
    }
    public function Afficher_remuneration() {
        $sql4 = "SELECT Remuneration FROM offre_stage order by titre_offre_stage asc;";
        $requete4 = $this->BDD->query($sql4);
        $Nom_offres = array();
        while ($row = $requete4->fetch()) {
            $Nom_offre = new Offre();
            $Nom_offre->setRemuneration($row['Remuneration']);
            $Nom_offres[] = $Nom_offre;
        }
        return $Nom_offres;
    }
    public function Afficher_Place() {
        $sql4 = "SELECT NB_places_restantes FROM offre_stage order by titre_offre_stage asc;";
        $requete4 = $this->BDD->query($sql4);
        $Nom_offres = array();
        while ($row = $requete4->fetch()) {
            $Nom_offre = new Offre();
            $Nom_offre->setNB_places_restantes($row['NB_places_restantes']);
            $Nom_offres[] = $Nom_offre;
        }
        return $Nom_offres;
    }
    public function Supprimer_Offre($id_offre) {
        $sql = "DELETE FROM requérir WHERE id_Offre_stage = :id_offre;        DELETE FROM Destiner WHERE id_Offre_stage = :id_offre;
        DELETE FROM mettre_en_favori WHERE id_Offre_stage = :id_offre;        DELETE FROM Candidater WHERE id_Offre_stage = :id_offre;
        DELETE FROM offre_stage WHERE id_Offre_stage = :id_offre;
        ";
        $requete = $this->BDD->prepare($sql);
        $requete->bindParam(':id_offre', $id_offre, PDO::PARAM_INT);
        $requete->execute();
    }

    
}

class Offre {
    private $id_offre;
    private $titre_offre_stage;
    private $descriptif_offres_stage;
    private $Remuneration;
    private $Date_publication;
    private $NB_places_restantes;
    private $nom_entreprise;
    private $Stage_Date;

    // Setters
    public function setid_offre($id_offre) {                                        $this->id_offre = $id_offre;    }
    public function settitre_offre_stage($titre_offre_stage) {                      $this->titre_offre_stage = $titre_offre_stage;    }
    public function setdescriptif_offres_stage($descriptif_offres_stage) {          $this->descriptif_offres_stage = $descriptif_offres_stage;    }
    public function setRemuneration($Remuneration) {                                $this->Remuneration = $Remuneration;    }
    public function setDate_publication($Date_publication) {                        $this->Date_publication = $Date_publication;    }
    public function setNB_places_restantes($NB_places_restantes) {                  $this->NB_places_restantes = $NB_places_restantes ;    }
    public function setnom_entreprise($nom_entreprise) {                            $this->nom_entreprise = $nom_entreprise ;    }
    public function setStage_Date($Stage_Date) {                                    $this->Stage_Date = $Stage_Date ;    }

    // Getters
    public function getid_offre() {                                         return $this->id_offre;    }
    public function gettitre_offre_stage() {                                return $this->titre_offre_stage;    }
    public function getdescriptif_offres_stage() {                          return $this->descriptif_offres_stage;    }
    public function getStage_Date() {                                       return $this->Stage_Date;    }
    public function getRemuneration() {                                     return $this->Remuneration;    }
    public function getDate_publication() {                                 return $this->Date_publication;    }
    public function getNB_places_restantes() {                              return $this->NB_places_restantes;    }
    public function getnom_entreprise() {                                   return $this->nom_entreprise;    }

}



?>