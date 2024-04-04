<?php
require_once "Assets/PHP/SQLConnection.php";

class Methodes_offres extends SQLconnection {
    public function __construct() {
        parent::__construct();
    }

    public function rechercher_offre($ou, $nom, $competence, $duree, $remuneration, $promotion) {
        $sql = "SELECT 
                    os.id_Offre_stage, 
                    os.titre_offre_stage, 
                    os.Descriptif_offres_stage, 
                    CEILING(DATEDIFF(os.Stage_Date_fin, os.Stage_Date_depart) / 7) as Diff, 
                    os.Remuneration, 
                    os.NB_places_restantes, 
                    e.nom_entreprise 
                FROM 
                    projet_web.destiner d 
                    JOIN offre_stage os ON os.id_Offre_stage = d.id_Offre_stage
                    JOIN promotions p ON p.id_promotion = d.id_promotion
                    JOIN requérir r ON os.id_Offre_stage = r.id_Offre_stage
                    JOIN compétence c ON c.id_Compétence = r.id_Compétence
                    JOIN ville v ON v.id_Ville = os.id_Ville
                    JOIN entreprise e ON e.id_entreprise = os.id_entreprise
                WHERE 
                    nom_entreprise LIKE :nom 
                    AND nom_Ville LIKE :ou 
                    AND nom_competence LIKE :competence
                    AND Remuneration >= :remuneration 
                    AND nom_promotion LIKE :promotion
                    AND DATEDIFF(Stage_Date_fin, Stage_Date_depart) >= :duree
                    GROUP BY id_Offre_stage";
    
        $requete = $this->getBDD()->prepare($sql);
        $requete->bindParam(':nom', $nom, PDO::PARAM_STR);
        $requete->bindParam(':ou', $ou, PDO::PARAM_STR);
        $requete->bindParam(':competence', $competence, PDO::PARAM_STR);
        $requete->bindParam(':remuneration', $remuneration, PDO::PARAM_INT);
        $requete->bindParam(':promotion', $promotion, PDO::PARAM_STR);
        $requete->bindParam(':duree', $duree, PDO::PARAM_INT);
    
        $requete->execute();
    
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
    public function stat_offre_comp() {
        $sql = "SELECT titre_offre_stage, count(nom_competence) as nb_competence FROM projet_web.requérir r
                join offre_stage os on os.id_Offre_stage = r.id_Offre_stage
                join compétence c on r.id_Compétence=c.id_Compétence
                group by titre_offre_stage
                order by titre_offre_stage asc;";
        $requete = $this->getBDD()->prepare($sql);
        $requete->execute();

        $offres = array();
        while ($row = $requete->fetch()) {
            $offre = new Offre();
            $offre->set_x($row['titre_offre_stage']);
            $offre->set_y($row['nb_competence']);
            $offres[] = $offre;
        }
        return $offres;
    }
    public function stat_offre_Localite() {
        $sql = "SELECT nom_Ville, count(titre_offre_stage) as nb_offre_stage FROM projet_web.offre_stage os
                join ville v on v.id_Ville=os.id_Ville
                GROUP BY nom_Ville
                order by nom_Ville asc;";
        $requete = $this->getBDD()->prepare($sql);
        $requete->execute();

        $offres = array();
        while ($row = $requete->fetch()) {
            $offre = new Offre();
            $offre->set_x($row['nom_Ville']);
            $offre->set_y($row['nb_offre_stage']);
            $offres[] = $offre;
        }
        return $offres;
}
    public function stat_offre_duréer() {
        $sql = "SELECT FLOOR(DATEDIFF(Stage_Date_fin, Stage_Date_depart) / 7) AS duree_semaines,    COUNT(*) AS nombre_offres
                FROM Offre_stage
                GROUP BY duree_semaines
                ORDER BY duree_semaines;";
        $requete = $this->getBDD()->prepare($sql);
        $requete->execute();

        $offres = array();
        while ($row = $requete->fetch()) {
            $offre = new Offre();
            $offre->set_x($row['nombre_offres']);
            $offre->set_y($row['duree_semaines']);
            $offres[] = $offre;
        }
        return $offres;
    }
    public function stat_offre_promo() {
        $sql = "SELECT count(titre_offre_stage) as nombre_offre, nom_promotion FROM projet_web.destiner d
                join offre_stage os on os.id_Offre_stage = d.id_Offre_stage
                join promotions p on p.id_promotion = d.id_promotion
                GROUP BY nom_promotion";
        $requete = $this->getBDD()->prepare($sql);
        $requete->execute();

        $offres = array();
        while ($row = $requete->fetch()) {
            $offre = new Offre();
            $offre->set_x($row['nom_promotion']);
            $offre->set_y($row['nombre_offre']);
            $offres[] = $offre;
        }
        return $offres;
    }
    public function stat_offre_wishlist() {
        $sql = "SELECT count(prenom_utilisateur) as nombre, titre_offre_stage FROM projet_web.mettre_en_favori f
        join utilisateur u on u.id_utilisateur = f.id_utilisateur
        join offre_stage os on os.id_Offre_stage = f.id_Offre_stage
        GROUP BY titre_offre_stage
        order by nombre desc;";
        $requete = $this->getBDD()->prepare($sql);
        $requete->execute();

        $offres = array();
        while ($row = $requete->fetch()) {
            $offre = new Offre();
            $offre->set_x($row['titre_offre_stage']);
            $offre->set_y($row['nombre']);
            $offres[] = $offre;
        }
        return $offres;
    }
}

class Offre {
    private $id_offre;
    private $x;
    private $y;


    // Setters
    public function set_x($x) {                            $this->x = $x; }
    public function set_y($y) {                             $this->y = $y; }
    


    // Getters
    public function get_x() {                             return $this->x; }
    public function get_y() {                             return $this->y; }
    

}