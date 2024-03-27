<?php
/*
class Offre {
    private $connexion;
    private $table_name = "Offre_stage";

    public function __construct() {
        $servername = "localhost";
        $database = "webproject";
        $username = "root";
        $password = "Finette1789";
        $this->connexion = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // Fonction pour créer un nouvel enregistrement
    function create($titre_offre_stage, $Stage_Date_fin, $Remuneration, $Date_publication, $NB_places_restantes, $id_adresse, $id_entreprise) {
        $query = "INSERT INTO " . $this->table_name . 
        "(titre_offre_stage, Stage_Date_fin, Remuneration, Date_publication, NB_places_restantes, id_adresse, id_entreprise) 
        VALUES (:titre_offre_stage, :Stage_Date_fin, :Remuneration, :Date_publication, :NB_places_restantes, :id_adresse, :id_entreprise);";
        
        $resultat = $this->connexion->prepare($query);

        $resultat->bindParam(":titre_offre_stage", $titre_offre_stage);
        $resultat->bindParam(":Stage_Date_fin", $Stage_Date_fin);
        $resultat->bindParam(":Remuneration", $Remuneration);
        $resultat->bindParam(":Date_publication", $Date_publication);
        $resultat->bindParam(":NB_places_restantes", $NB_places_restantes);
        $resultat->bindParam(":id_adresse", $id_adresse);
        $resultat->bindParam(":id_entreprise", $id_entreprise);
        $resultat->execute();
    }

    // Fonction pour lire tous les enregistrements
    function read() {
        $query = "SELECT * FROM " . $this->table_name;

        $resultat = $this->connexion->prepare($query);
        $resultat->execute();

        (titre_offre_stage, Stage_Date_fin, Remuneration, Date_publication, NB_places_restantes, id_adresse, id_entreprise)

        if ($resultat->rowCount() > 0) {
            // Boucler à travers les enregistrements et les afficher
            $content = "<h2>Résultats :</h2>";
            $content .= "<table border='1'>
                            <tr>
                                <th>NoPil</th>
                                <th>NomPil</th>
                                <th>NatPil</th>
                                <th>NoTV</th>
                            </tr>";
            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                $content .= "<tr>
                                <td>{$row['NoPil']}</td>
                                <td>{$row['NomPil']}</td>
                                <td>{$row['NatPil']}</td>
                                <td>{$row['NoTV']}</td>
                            </tr>";
            }
            $content .= "</table>";
        } else {
            // Aucun enregistrement trouvé
            $content .= "<p>Aucun enregistrement trouvé.</p>";
        }
        return $content;
    }

    // Fonction pour mettre à jour un enregistrement
    function update($titre_offre_stage, $Stage_Date_fin, $Remuneration, $Date_publication, $NB_places_restantes, $id_adresse, $id_entreprise) {
        $query = "UPDATE " . $this->table_name .
                " SET titre_offre_stage=:titre_offre_stage, 
                Stage_Date_fin=:Stage_Date_fin, 
                Remuneration=:Remuneration,
                Date_publication=:Date_publication,
                NB_places_restantes=:NB_places_restantes,
                id_adresse=:id_adresse,
                WHERE NoPil=:NoPil;";

                , id_entreprise)
    
        $resultat = $this->connexion->prepare($query);

        $resultat->bindParam(":titre_offre_stage", $titre_offre_stage);
        $resultat->bindParam(":Stage_Date_fin", $Stage_Date_fin);
        $resultat->bindParam(":Remuneration", $Remuneration);
        $resultat->bindParam(":Date_publication", $Date_publication);
        $resultat->bindParam(":NB_places_restantes", $NB_places_restantes);
        $resultat->bindParam(":id_adresse", $id_adresse);
        $resultat->bindParam(":id_entreprise", $id_entreprise);
        return $resultat->execute();
    }

    // Fonction pour supprimer un enregistrement
    function delete($NoPil) {
        $query = "DELETE FROM " . $this->table_name . " WHERE NoPil =:NoPil;";

        $resultat = $this->connexion->prepare($query);
        $resultat->bindParam(":NoPil", $NoPil);
        return $resultat->execute();
    }
}