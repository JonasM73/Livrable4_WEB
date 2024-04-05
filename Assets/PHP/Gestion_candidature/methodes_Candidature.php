<?php
require_once "Assets/PHP/SQLConnection.php";
require_once 'Assets/PHP/Gestion_Accueil/Méthodes_Accueil.php';

class wishlist  extends SQLconnection{
    public function __construct() {
        parent::__construct();
    }
    public function Afficher_Offres($id_utl) {
        $sql = "SELECT os.id_Offre_stage, os.titre_offre_stage, os.Descriptif_offres_stage, 
                CEILING(DATEDIFF(os.Stage_Date_fin, os.Stage_Date_depart) / 7) as Diff, os.Remuneration, os.NB_places_restantes, e.nom_entreprise FROM projet_web.mettre_en_favori	m
                join utilisateur u on u.id_utilisateur = m.id_utilisateur
                join offre_stage os on os.id_Offre_stage = m.id_Offre_stage
                join entreprise e on e.id_entreprise = os.id_entreprise
                where m.id_utilisateur = :id_utl 
                AND status_entreprise =1";
        $requete = $this->getBDD()->prepare($sql);
        $requete->bindParam(':id_utl', $id_utl, PDO::PARAM_INT);
        $requete->execute();        $offres = array();
        
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
    public function ajouterUtilisateur() {}

    public function supprimerUtilisateur() {}
}
