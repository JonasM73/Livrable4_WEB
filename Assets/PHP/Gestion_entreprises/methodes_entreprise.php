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


    public function insererEntrepriseAvecAdresses(Entreprise $entreprise, array $adresses) {
        try {
            $this->getBDD()->beginTransaction();
    
            // Insérez entreprise
            $sql_insert_entreprise = "INSERT INTO Entreprise (nom_entreprise, entreprise_secteur_activite, status_entreprise) VALUES (:nom_entreprise, :secteur_activite, 1)";
            $stmt_entreprise = $this->getBDD()->prepare($sql_insert_entreprise);
            $stmt_entreprise->execute([
                ':nom_entreprise' => $entreprise->getNom(),
                ':secteur_activite' => $entreprise->getSecteurActivite()
            ]);
    
            $id_entreprise = $this->getBDD()->lastInsertId();
    
            // Insérez adresses
            $sql_insert_adresse = "INSERT INTO Adresse (CP_adresse, AD_adresse, id_Ville) VALUES (:cp, :adresse, :id_ville)";
            $stmt_adresse = $this->getBDD()->prepare($sql_insert_adresse);
    
            foreach ($adresses as $adresse) {
                // Vérifier si la ville existe déjà
                $id_ville = $this->verifierVilleExistante($adresse['ville']);
            
                // Si la ville n'existe pas, l'ajouter à la base de données
                if (!$id_ville) {
                    $id_ville = $this->ajouterVille($adresse['ville']);
                }
            
                // Insérer l'adresse avec l'ID de la ville correspondante
                $stmt_adresse->execute([
                    ':cp' => $adresse['CP'],
                    ':adresse' => $adresse['AD'],
                    ':id_ville' => $id_ville
                ]);
            }
            
    
            $this->getBDD()->commit();
            return true;
    
        } catch (PDOException $e) {
            echo "Erreur d'insertion : " . $e->getMessage();
            $this->getBDD()->rollBack();
            return false;
        }
    }
    
    private function verifierVilleExistante($nom_ville) {
        $sql = "SELECT id_Ville FROM Ville WHERE nom_Ville = :nom_ville";
        $stmt = $this->getBDD()->prepare($sql);
        $stmt->execute([':nom_ville' => $nom_ville]);
        $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resultat ? $resultat['id_Ville'] : null;
    }
    
    private function ajouterVille($nom_ville) {
        $sql = "INSERT INTO Ville (nom_Ville) VALUES (:nom_ville)";
        $stmt = $this->getBDD()->prepare($sql);
        $stmt->execute([':nom_ville' => $nom_ville]);
        return $this->getBDD()->lastInsertId();
    }
    
    public function afficher_entreprise() {
        $sql = "SELECT e.id_entreprise, nom_entreprise, entreprise_secteur_activite, nom_Ville, CP_adresse, AD_adresse, AVG(note_de_lentreprise) AS note_moyenne 
                FROM projet_web.entreprise e
                JOIN situer s ON s.id_entreprise = e.id_entreprise
                JOIN ville v ON v.id_Ville = s.id_Ville
                JOIN adresse a ON a.id_Ville = v.id_Ville
                JOIN evaluer ev ON ev.id_entreprise = e.id_entreprise
                Where status_entreprise = 1
                GROUP BY id_entreprise, nom_entreprise, entreprise_secteur_activite, nom_Ville, CP_adresse, AD_adresse;";
        $requete = $this->getBDD()->prepare($sql);
        $requete->execute(); // Exécuter la requête SQL

        $offres = array();

        while ($row = $requete->fetch()) {
            $offre = new Entreprise();
            $offre->setID($row['id_entreprise']);
            $offre->setNom($row['nom_entreprise']);
            $offre->setSecteurActivite($row['entreprise_secteur_activite']);
            $offre->setCP($row['CP_adresse']);
            $offre->setAP($row['AD_adresse']);
            $offre->setVille($row['nom_Ville']);
            $offre->setnote_moyenne($row['note_moyenne']);

            $offres[] = $offre;
        }
        return $offres;
    }

    public function afficher_une_entreprise($nom, $secteur, $ville, $CP, $AP) {
        $sql = "SELECT e.id_entreprise, nom_entreprise, entreprise_secteur_activite, nom_Ville, CP_adresse, AD_adresse, AVG(note_de_lentreprise) AS note_moyenne 
                FROM projet_web.entreprise e
                JOIN situer s ON s.id_entreprise = e.id_entreprise
                JOIN ville v ON v.id_Ville = s.id_Ville
                JOIN adresse a ON a.id_Ville = v.id_Ville
                JOIN evaluer ev ON ev.id_entreprise = e.id_entreprise
                Where nom_entreprise LIKE :nom
                AND status_entreprise = 1
                And entreprise_secteur_activite LIKE :secteur
                And nom_Ville LIKE :ville
                And CP_adresse LIKE :CP
                And AD_adresse LIKE :AP
                GROUP BY id_entreprise, nom_entreprise, entreprise_secteur_activite, nom_Ville, CP_adresse, AD_adresse";
        $requete = $this->getBDD()->prepare($sql);
        $requete->bindParam(':nom', $nom);
        $requete->bindParam(':secteur', $secteur);
        $requete->bindParam(':ville', $ville);
        $requete->bindParam(':CP', $CP);
        $requete->bindParam(':AP', $AP);

        $requete->execute(); // Exécuter la requête SQL

        $offres = array();

        while ($row = $requete->fetch()) {
            $offre = new Entreprise();
            $offre->setID($row['id_entreprise']);
            $offre->setNom($row['nom_entreprise']);
            $offre->setSecteurActivite($row['entreprise_secteur_activite']);
            $offre->setCP($row['CP_adresse']);
            $offre->setAP($row['AD_adresse']);
            $offre->setVille($row['nom_Ville']);
            $offre->setnote_moyenne($row['note_moyenne']);

            $offres[] = $offre;
        }
        return $offres;
    }

    public function invisibilite($id_offre){
        $sql = "UPDATE Entreprise SET status_entreprise = 0 WHERE id_entreprise = :id;";
        $requete = $this->getBDD()->prepare($sql);
        $requete->bindParam(':id', $id_offre, PDO::PARAM_INT);
        $requete->execute();
    }
    public function noter($id_offre, $note, $id_ut){
        $sql = "INSERT INTO Evaluer (id_utilisateur, id_entreprise, note_de_lentreprise) VALUES (:id_ut ,:id_offre ,:note)";
        $requete = $this->getBDD()->prepare($sql);
        $requete->bindParam(':id_offre', $id_offre, PDO::PARAM_INT);
        $requete->bindParam(':id_ut', $id_ut, PDO::PARAM_INT);
        $requete->bindParam(':note', $note, PDO::PARAM_INT); // Assurez-vous de lier la note comme une chaîne de caractères
        $resultat = $requete->execute();
        
        // Vérifier les erreurs
        if (!$resultat) {
            // Afficher les erreurs
            $erreur = $requete->errorInfo();
            var_dump($erreur);
        }
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

class Entreprise {
    private $ID;
    private $nom;
    private $secteur_activite;
    private $CP;
    private $AP;
    private $ville;
    private $note_moyenne;


    // Setters
    public function setID($ID) {        $this->ID = $ID;    }
    public function setNom($nom) {        $this->nom = $nom;    }
    public function setSecteurActivite($secteur_activite) {        $this->secteur_activite = $secteur_activite;    }
    public function setCP($CP) {        $this->CP = $CP;    }
    public function setAP($AP) {        $this->AP = $AP;    }
    public function setVille($ville) {        $this->ville = $ville;    }
    public function setnote_moyenne($note_moyenne) {        $this->note_moyenne = $note_moyenne;    }

    // Getters
    public function getID() {        return $this->ID;    }
    public function getNom() {        return $this->nom;    }
    public function getSecteurActivite() {        return $this->secteur_activite;    }
    public function getCP() {        return $this->CP;    }
    public function getAP() {        return $this->AP;    }
    public function getVille() {        return $this->ville;    }
    public function getnote_moyenne() {        return $this->note_moyenne;    }

}
