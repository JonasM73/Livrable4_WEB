<?php
require_once "Assets/PHP/SQLConnection.php";
require_once "Assets/PHP/Gestion_entreprises/methodes_entreprise.php";


class Methodes_offres extends SQLconnection {
    public function __construct() {
        parent::__construct();
    }

    public function stat_offre_comp() {
        $sql = "SELECT titre_offre_stage, count(nom_competence) as nb_competence FROM projet_web.requérir r
                join offre_stage os on os.id_Offre_stage = r.id_Offre_stage
                join compétence c on r.id_Compétence=c.id_Compétence
                group by titre_offre_stage
                order by nb_competence desc;";
        $requete = $this->getBDD()->prepare($sql);
        $requete->execute();

        $offres = array();
        while ($row = $requete->fetch()) {
            $offre = new xy();
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
                order by nb_offre_stage desc;";
        $requete = $this->getBDD()->prepare($sql);
        $requete->execute();

        $offres = array();
        while ($row = $requete->fetch()) {
            $offre = new xy();
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
                ORDER BY duree_semaines desc;";
        $requete = $this->getBDD()->prepare($sql);
        $requete->execute();

        $offres = array();
        while ($row = $requete->fetch()) {
            $offre = new xy();
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
                GROUP BY nom_promotion Order by nombre_offre desc";
        $requete = $this->getBDD()->prepare($sql);
        $requete->execute();

        $offres = array();
        while ($row = $requete->fetch()) {
            $offre = new xy();
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
            $offre = new xy();
            $offre->set_x($row['titre_offre_stage']);
            $offre->set_y($row['nombre']);
            $offres[] = $offre;
        }
        return $offres;
    }
}

