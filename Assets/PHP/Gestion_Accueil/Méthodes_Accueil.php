<?php
require_once "Assets/PHP/SQLConnection.php";

class Accueil_offre extends SQLconnection {
    public function __construct() {
        parent::__construct();
    }

    public function Afficher_Offres() {
        $sql = "SELECT os.id_Offre_stage, os.titre_offre_stage, os.Descriptif_offres_stage, CEILING(DATEDIFF(os.Stage_Date_fin, os.Stage_Date_depart) / 7) as Diff, os.Remuneration, os.NB_places_restantes, e.nom_entreprise
                FROM offre_stage os JOIN entreprise e ON e.id_entreprise = os.id_entreprise ORDER BY os.titre_offre_stage ASC";
        $requete = $this->getBDD()->query($sql);
        $offres = array();
        
        while ($row = $requete->fetch()) {
            $offre = new Offre();
            $offre->setid_offre($row['id_Offre_stage']);
            $offre->settitre_offre_stage($row['titre_offre_stage']);
            $offre->setdescriptif_offres_stage($row['Descriptif_offres_stage']);
            $offre->setStage_Date($row['Diff']);
            $offre->setRemuneration($row['Remuneration']);
            $offre->setNB_places_restantes($row['NB_places_restantes']);
            $offre->setnom_entreprise($row['nom_entreprise']);
            $offres[] = $offre;
        }
        return $offres;
    }
    public function Supprimer_Offre($id_offre) {
        $sql = "DELETE FROM requérir WHERE id_Offre_stage = :id;
                DELETE FROM Destiner WHERE id_Offre_stage = :id;
                DELETE FROM mettre_en_favori WHERE id_Offre_stage = :id;
                DELETE FROM Candidater WHERE id_Offre_stage = :id;
                DELETE FROM offre_stage WHERE id_Offre_stage = :id";
        $requete = $this->getBDD()->prepare($sql);
        $requete->bindParam(':id', $id_offre, PDO::PARAM_INT);
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
    public function setid_offre($id_offre) { $this->id_offre = $id_offre; }
    public function settitre_offre_stage($titre_offre_stage) { $this->titre_offre_stage = $titre_offre_stage; }
    public function setdescriptif_offres_stage($descriptif_offres_stage) { $this->descriptif_offres_stage = $descriptif_offres_stage; }
    public function setRemuneration($Remuneration) { $this->Remuneration = $Remuneration; }
    public function setDate_publication($Date_publication) { $this->Date_publication = $Date_publication; }
    public function setNB_places_restantes($NB_places_restantes) { $this->NB_places_restantes = $NB_places_restantes; }
    public function setnom_entreprise($nom_entreprise) { $this->nom_entreprise = $nom_entreprise; }
    public function setStage_Date($Stage_Date) { $this->Stage_Date = $Stage_Date; }

    // Getters
    public function getid_offre() { return $this->id_offre; }
    public function gettitre_offre_stage() { return $this->titre_offre_stage; }
    public function getdescriptif_offres_stage() { return $this->descriptif_offres_stage; }
    public function getStage_Date() { return $this->Stage_Date; }
    public function getRemuneration() { return $this->Remuneration; }
    public function getDate_publication() { return $this->Date_publication; }
    public function getNB_places_restantes() { return $this->NB_places_restantes; }
    public function getnom_entreprise() { return $this->nom_entreprise; }
}
?>
