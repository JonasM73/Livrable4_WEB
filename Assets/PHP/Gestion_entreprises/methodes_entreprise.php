<?php
require_once "Assets/PHP/SQLConnection.php";

class méthodes_entreprises extends SQLconnection {
    public function __construct() {
        parent::__construct();
    }

    public function stat_entreprise_secteur_act() {
        $sql = "SELECT count(nom_entreprise) as nombre_entre, entreprise_secteur_activite FROM projet_web.entreprise
                group by entreprise_secteur_activite
                order by nombre_entre desc;";
        $requete = $this->getBDD()->prepare($sql);
        $requete->execute();

        $offres = array();
        while ($row = $requete->fetch()) {
            $offre = new xy();
            $offre->set_x($row['entreprise_secteur_activite']);
            $offre->set_y($row['nombre_entre']);
            $offres[] = $offre;
        }
        return $offres;
    }
    public function stat_entreprise_Localite() {
        $sql = "SELECT count(nom_entreprise) as nombre_entre, nom_Ville FROM projet_web.situer s
                join entreprise e on s.id_entreprise = e.id_entreprise
                join ville v on v.id_Ville=s.id_Ville
                group by nom_Ville
                order by nombre_entre desc;";
        $requete = $this->getBDD()->prepare($sql);
        $requete->execute();

        $offres = array();
        while ($row = $requete->fetch()) {
            $offre = new xy();
            $offre->set_x($row['nom_Ville']);
            $offre->set_y($row['nombre_entre']);
            $offres[] = $offre;
        }
        return $offres;
}
    public function stat_entreprise_promo() {
        $sql = "SELECT count(nom_entreprise) as nombre_etre, nom_promotion FROM projet_web.destiner d
                join promotions p on p.id_promotion = d.id_promotion
                join offre_stage os on os.id_Offre_stage = d.id_Offre_stage
                join entreprise e on e.id_entreprise = os.id_entreprise
                group by nom_promotion
                order by nombre_etre desc;";
        $requete = $this->getBDD()->prepare($sql);
        $requete->execute();

        $offres = array();
        while ($row = $requete->fetch()) {
            $offre = new xy();
            $offre->set_x($row['nom_promotion']);
            $offre->set_y($row['nombre_etre']);
            $offres[] = $offre;
        }
        return $offres;
    }
    public function stat_entreprise_topentreprise() {
        $sql = "SELECT nom_entreprise, count(id_utilisateur) as nombre_like FROM projet_web.offre_stage os
                join entreprise e on os.id_entreprise = e.id_entreprise
                join candidater c on c.id_Offre_stage = os.id_Offre_stage
                group by nom_entreprise
                order by nombre_like desc;";
        $requete = $this->getBDD()->prepare($sql);
        $requete->execute();

        $offres = array();
        while ($row = $requete->fetch()) {
            $offre = new xy();
            $offre->set_x($row['nom_entreprise']);
            $offre->set_y($row['nombre_like']);
            $offres[] = $offre;
        }
        return $offres;
    }
}

class xy {
    private $x;
    private $y;


    // Setters
    public function set_x($x) {                            $this->x = $x; }
    public function set_y($y) {                             $this->y = $y; }
    


    // Getters
    public function get_x() {                             return $this->x; }
    public function get_y() {                             return $this->y; }
    

}