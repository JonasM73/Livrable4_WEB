<?php
require_once "Assets/PHP/SQLConnection.php";

class Entreprise {
    private $id_entreprise;
    private $nom_entreprise;
    private $secteur_activite;

    // Setters
    public function setid_entreprise($id_entreprise) { $this->id_entreprise = $id_entreprise; }
    public function setnom_entreprise($nom_entreprise) { $this->nom_entreprise = $nom_entreprise; }
    public function setsecteur_activite($secteur_activite) { $this->secteur_activite = $secteur_activite; }

    // Getters
    public function getid_entreprise() { return $this->id_entreprise; }
    public function getnom_entreprise() { return $this->nom_entreprise; }
    public function getsecteur_activite() { return $this->secteur_activite; }
}

class MANIP_Entreprise extends SQLconnection {
    public function __construct() {
        parent::__construct();
    }

    public function Afficher_Entreprise() {
        $sql = "";
        $requete = $this->getBDD()->query($sql);
        $entreprise = array();
        while ($row = $requete->fetch()) {
            $entreprise = new Entreprise();
            $entreprise->setid_entreprise($row['id_entreprise']);
            $entreprise->setnom_entreprise($row['nom_entreprise']);
            $entreprise->setsecteur_activite($row['entreprise_secteur_activite']);
            $entreprises[] = $entreprise;
        }
        return $entreprises;
    }

    public function Supprimer_Entreprise($id_entreprise) {
        $sql = "DELETE FROM requérir WHERE id_Offre_stage = :id;
                DELETE FROM Destiner WHERE id_Offre_stage = :id;
                DELETE FROM mettre_en_favori WHERE id_Offre_stage = :id;
                DELETE FROM Candidater WHERE id_Offre_stage = :id;
                DELETE FROM offre_stage WHERE id_Offre_stage = :id";
        $requete = $this->getBDD()->prepare($sql);
        $requete->bindParam(':id', $id_offre, PDO::PARAM_INT);
        $requete->execute();
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
}
/*
    // Retourne le nombre d'entreprise par secteur d'activités
    function stats_secteur(){
        $query = "SELECT entreprise_secteur_activite, COUNT(*) AS nombre_entreprises FROM " . $this->table_name . " GROUP BY entreprise_secteur_activite";
        $resultat = $this->connexion->prepare($query);
        return $resultat->execute();
    }

    // Retourne le nombre d'entreprises par ville
    function stats_localite (){
        $query = "SELECT Ville.nom_Ville, COUNT(Entreprise.id_entreprise) AS nombre_entreprises
                FROM Ville
                JOIN Adresse ON Ville.id_Ville = Adresse.id_Ville
                JOIN Entreprise ON Adresse.id_entreprise = Entreprise.id_entreprise
                GROUP BY Ville.nom_Ville;";
        $resultat = $this->connexion->prepare($query);
        return $resultat->execute();
    }

    // Retourne le top 10 des entreprises les plus sollicités
    function stats_top10 () {
        $query = "SELECT Entreprise.nom_entreprise, COUNT(Candidater.id_Offre_stage) AS nombre_stagiaires
                FROM Entreprise
                JOIN Offre_stage ON Entreprise.id_entreprise = Offre_stage.id_entreprise
                JOIN Candidater ON Offre_stage.id_Offre_stage = Candidater.id_Offre_stage
                GROUP BY Entreprise.nom_entreprise
                ORDER BY nombre_stagiaires DESC;";
        $resultat = $this->connexion->prepare($query);
        return $resultat->execute();
    }
}*/