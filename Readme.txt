Prérequis:
- XAMPP
- MySQL

Etape 1 : 
- Décompresser les fichiers de l'application dans un dossier présent dans le répertoire "xampp/htdocs/" dans XAMPP.

Etape 2 :
- Créer un utilisateur "root" ayant pour mot de passe "cesi" dans MySQL.
- Créer une base de données "projet_web" et la définir comme BDD par défaut.
- Exécuter le Dump de la base de données.

Etape 3:
- Exécuter le fichier "Encryptage_mdp.php" de l'application dans le navigateur (attention, c'est le fichier index.php qui se lance 
par défaut, il est nécessaire de lui donner un autre nom temporairement).
- Vérifier le cryptage des mots de passe dans MySQL avec la requête "SELECT * FROM utilisateur;".

Etape 4 :
- Lancer l'application avec l'URL "htpp://localhost/Livrable4_WEB".
- LOGIN "Utilisateur", MDP "cesi"