<?php
class Entreprise {
    private $connexion;
    private $table_name = "Entreprise";

    public function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "Finette1789";
        $database = "projectweb";
        $this->connexion = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // Fonction pour créer un nouvel enregistrement
    function create($nom_entreprise, $entreprise_secteur_activite, $ville) {
        $query = "INSERT INTO " . $this->table_name . 
        "(nom_entreprise, entreprise_secteur_activite) VALUES (:nom_entreprise, :entreprise_secteur_activite);";
        
        $resultat = $this->connexion->prepare($query);

        $resultat->bindParam(":nom_entreprise", $nom_entreprise);
        $resultat->bindParam(":entreprise_secteur_activite", $entreprise_secteur_activite);
        $resultat->execute();
    }

    // Fonction pour lire tous les enregistrements
    function read() {
        $query = "SELECT * FROM " . $this->table_name;

        $resultat = $this->connexion->prepare($query);
        $resultat->execute();

        if ($resultat->rowCount() > 0) {
            // Boucler à travers les enregistrements et les afficher
            $content = "";
            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                $content .= "<fieldset><label>{$row['nom_entreprise']}
                                <p>Secteur d'activité : {$row['entreprise_secteur_activite']}</p>
                            </fieldset><br><br>";
            }
        } else {
            // Aucun enregistrement trouvé
            $content .= "<p>Aucun enregistrement trouvé.</p>";
        }
        return $content;
    }

    // Fonction pour mettre à jour un enregistrement
    function update($nom_entreprise,$entreprise_secteur_activite, $ville) {
        $query = "UPDATE " . $this->table_name .
                " SET nom_entreprise=:nom_entreprise, entreprise_secteur_activite=:entreprise_secteur_activite 
                  WHERE nom_entreprise = :nom_entreprise;";

        $resultat = $this->connexion->prepare($query);

        $resultat->bindParam(":nom_entreprise", $nom_entreprise);
        $resultat->bindParam(":entreprise_secteur_activite", $entreprise_secteur_activite);
        return $resultat->execute();
    }

    // Fonction pour supprimer un enregistrement
    function delete($nom_entreprise) {
        $query = "DELETE FROM " . $this->table_name . " nom_entreprise = :nom_entreprise";

        $resultat = $this->connexion->prepare($query);
        $resultat->bindParam(":nom_entreprise", $nom_entreprise);
        return $resultat->execute();
    }

    function Search($nom, $entreprise_secteur_activite, $ville, $num_stagiaire, $moy_evaluations){

    }

    function evaluate ($utilisateur, $entreprise){
        
    }

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
}