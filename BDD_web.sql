DROP TABLE IF EXISTS 
Utilisateur, Entreprise, Compétence, Ville, Adresse, Promotions, Offre_stage, requérir, Situer, Candidater, Evaluer, Contenir, Assigner, Destiner, mettre_en_favori;

CREATE TABLE Utilisateur(
   id_utilisateur INT AUTO_INCREMENT,
   nom_utilisateur VARCHAR(50) NOT NULL,
   prenom_utilisateur VARCHAR(50) NOT NULL,
   utilisateur_type VARCHAR(50) NOT NULL,
   utilisateur_login VARCHAR(50) NOT NULL,
   utilisateur_MDP VARCHAR(100) NOT NULL,
   PRIMARY KEY(id_utilisateur)
);

INSERT INTO Utilisateur (nom_utilisateur, prenom_utilisateur, utilisateur_type, utilisateur_login, utilisateur_MDP) VALUES
('Dupont', 'Jean', 'Admin', 'jdupont@viacesi.com', 'Jojojo73!'), 
('Martin', 'Pierre', 'Pilote', 'pmartin@viacesi.com', 'Jojojo74!'), 
('Dubois', 'Sophie', 'Étudiant', 'sdubois@viacesi.com', 'Jojojo75!'),
('Greg', 'FilsdeGreg', 'Pilote', 'Greg@viacesi.fr','Passw0rd!'),
('Lefevre', 'Luc', 'Pilote', 'llefevre@viacesi.com', 'mot_de_passe'), 
('Moreau', 'Marie', 'Pilote', 'mmoreau@viacesi.com', 'mot_de_passe'), 
('Roux', 'Julie', 'Pilote', 'jroux@viacesi.com', 'mot_de_passe'), 
('Garcia', 'Thomas', 'Pilote', 'tgarcia@viacesi.com', 'mot_de_passe'), 
('Fournier', 'Laura', 'Pilote', 'lfournier@viacesi.com', 'mot_de_passe'), 
('Chevalier', 'Alex', 'Pilote', 'achevalier@viacesi.com', 'mot_de_passe'), 
('Bonnet', 'Emma', 'Pilote', 'ebonnet@viacesi.com', 'mot_de_passe'), 
('Muller', 'Paul', 'Étudiant', 'pmuller@viacesi.com', 'mot_de_passe'), 
('Leroy', 'Camille', 'Étudiant', 'cleroy@viacesi.com', 'mot_de_passe'), 
('Sanchez', 'Lucie', 'Étudiant', 'lsanchez@viacesi.com', 'mot_de_passe'), 
('Roussel', 'Maxime', 'Étudiant', 'mroussel@viacesi.com', 'mot_de_passe'), 
('Hubert', 'Sarah', 'Étudiant', 'shubert@viacesi.com', 'mot_de_passe'), 
('Caron', 'Antoine', 'Étudiant', 'acaron@viacesi.com', 'mot_de_passe'), 
('Marchand', 'Julia', 'Étudiant', 'jmarchand@viacesi.com', 'mot_de_passe'), 
('Guerin', 'Louis', 'Étudiant', 'lguerin@viacesi.com', 'mot_de_passe'), 
('Meunier', 'Léa', 'Étudiant', 'lmeunier@viacesi.com', 'mot_de_passe'), 
('Andre', 'Hélène', 'Étudiant', 'handre@viacesi.com', 'mot_de_passe'), 
('Girard', 'Lucas', 'Étudiant', 'lgirard@viacesi.com', 'mot_de_passe'), 
('Garnier', 'Manon', 'Étudiant', 'mgarnier@viacesi.com', 'mot_de_passe'), 
('Benjamin', 'Emma', 'Étudiant', 'ebenjamin@viacesi.com', 'mot_de_passe'), 
('Dumont', 'Théo', 'Étudiant', 'tdumont@viacesi.com', 'mot_de_passe'), 
('Lopez', 'Mathilde', 'Étudiant', 'mlopez@viacesi.com', 'mot_de_passe'), 
('Lemoine', 'Enzo', 'Étudiant', 'elemoine@viacesi.com', 'mot_de_passe'), 
('Jean', 'Chloé', 'Étudiant', 'cjean@viacesi.com', 'mot_de_passe'), 
('Noel', 'Zoé', 'Étudiant', 'znoel@viacesi.com', 'mot_de_passe'), 
('Paris', 'Léonie', 'Étudiant', 'lparis@viacesi.com', 'mot_de_passe'), 
('Robert', 'Alexandre', 'Étudiant', 'arobert@viacesi.com', 'mot_de_passe'), 
('Bernard', 'Lola', 'Étudiant', 'lbernard@viacesi.com', 'mot_de_passe'), 
('Robin', 'Lucie', 'Étudiant', 'lrobin@viacesi.com', 'mot_de_passe'), 
('Thomas', 'Noah', 'Étudiant', 'nthomas@viacesi.com', 'mot_de_passe'), 
('Perez', 'Inès', 'Étudiant', 'iperez@viacesi.com', 'mot_de_passe'), 
('Petit', 'Nathan', 'Étudiant', 'npetit@viacesi.com', 'mot_de_passe'), 
('Barbier', 'Emma', 'Étudiant', 'ebarbier@viacesi.com', 'mot_de_passe'), 
('Hubert', 'Louis', 'Étudiant', 'lhubert@viacesi.com', 'mot_de_passe'), 
('Lefebvre', 'Eva', 'Étudiant', 'elefebvre@viacesi.com', 'mot_de_passe'), 
('Renard', 'Théo', 'Étudiant', 'trenard@viacesi.com', 'mot_de_passe'), 
('Pierre', 'Maëlle', 'Étudiant', 'mpierre@viacesi.com', 'mot_de_passe'), 
('Mathieu', 'Louise', 'Étudiant', 'lmathieu@viacesi.com', 'mot_de_passe'), 
('Masson', 'Antoine', 'Étudiant', 'amasson@viacesi.com', 'mot_de_passe'), 
('Charpentier', 'Lucas', 'Étudiant', 'lcharpentier@viacesi.com', 'mot_de_passe'), 
('Leger', 'Léa', 'Étudiant', 'lleger@viacesi.com', 'mot_de_passe'), 
('Hubert', 'Noémie', 'Étudiant', 'nhubert@viacesi.com', 'mot_de_passe'), 
('Morin', 'Théo', 'Étudiant', 'tmorin@viacesi.com', 'mot_de_passe'), 
('Schmitt','Julie', 'Étudiant', 'jschmitt@viacesi.com', 'mot_de_passe'), 
('Perrin', 'Emma', 'Étudiant', 'eperrin@viacesi.com', 'mot_de_passe'), 
('Antoine', 'Jade', 'Étudiant', 'jantoine@viacesi.com', 'mot_de_passe'), 
('Bertrand', 'Enzo', 'Étudiant', 'ebertrand@viacesi.com', 'mot_de_passe');

CREATE TABLE Entreprise(
   id_entreprise INT AUTO_INCREMENT,
   nom_entreprise VARCHAR(50) NOT NULL,
   entreprise_secteur_activite VARCHAR(50) NOT NULL,
   status_entreprise bool Not NULL,
   PRIMARY KEY(id_entreprise)
);

INSERT INTO Entreprise (nom_entreprise, entreprise_secteur_activite, status_entreprise ) VALUES
('Entreprise A', 'Technologie', 1), 
('Entreprise B', 'Finance', 1), 
('Entreprise C', 'Industrie', 1), 
('Entreprise D', 'Santé', 1), 
('Entreprise E', 'Éducation', 1), 
('Entreprise F', 'Commerce', 1), 
('Entreprise G', 'Immobilier', 1), 
('Entreprise H', 'Services', 1), 
('Entreprise I', 'Marketing', 1), 
('Entreprise J', 'Communication', 1), 
('Entreprise K', 'Transport', 1), 
('Entreprise L', 'Tourisme', 1), 
('Entreprise M', 'Énergie', 1), 
('Entreprise N', 'Agroalimentaire', 1), 
('Entreprise O', 'Consulting', 1), 
('Entreprise P', 'Assurance', 1), 
('Entreprise Q', 'Mode', 1), 
('Entreprise R', 'Artisanat', 1), 
('Entreprise S', 'Pharmaceutique', 1), 
('Entreprise T', 'Événementiel', 1),
('Entreprise U', 'Technologie', 1), 
('Entreprise V', 'Finance', 1), 
('Entreprise W', 'Industrie', 1), 
('Entreprise X', 'Santé', 1), 
('Entreprise Y', 'Éducation', 1), 
('Entreprise Z', 'Commerce', 1), 
('Entreprise AA', 'Immobilier', 0), 
('Entreprise BB', 'Services', 1), 
('Entreprise CC', 'Marketing', 1), 
('Entreprise DD', 'Communication', 1);

CREATE TABLE Compétence(
   id_Compétence INT AUTO_INCREMENT,
   nom_competence VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_Compétence)
);

INSERT INTO Compétence (nom_competence) VALUES
('Programmation'), ('Développement web'), ('Base de données'), ('Analyse de données'), ('Conception graphique'),('Marketing digital'), ('Gestion de projet'), 
('Rédaction et communication'), ("Finance d'entreprise"), ('Comptabilité'),('Ressources humaines'), ("Gestion de la chaîne d'approvisionnement"), 
("Stratégie d'entreprise"), ('Analyse financière'),("Développement d'applications mobiles"), ('Intelligence artificielle '), ('Réseaux et sécurité informatique'),
('Administration système'),("Design d'expérience utilisateur (UX/UI)"), ('Analyse des marchés et études de marché'), ('Développement logiciel embarqué'),
('Gestion des médias sociaux'), ('Relations publiques'), ('Commerce électronique'), ('Énergie renouvelable et développement durable'),('Mécatronique'), 
('Architecture logicielle'), ('Traitement du langage naturel'), ('Blockchain et cryptomonnaies'), ('Internet des objets (IoT)'),('Systèmes embarqués'), 
('Sécurité informatique et cybersécurité'), ('Design de produit'), ('Génie mécanique'), ('Modélisation et simulation'),('Design industriel'), 
('Analyse économique'), ('Sciences des données'), ('Développement durable'), ('Analyse et gestion des risques');

CREATE TABLE Ville(
   id_Ville INT AUTO_INCREMENT,
   nom_Ville VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_Ville)
);

INSERT INTO Ville (nom_Ville) VALUES
('Paris'), 
('Marseille'), 
('Lyon'), 
('Toulouse'), 
('Nice'), 
('Nantes'), 
('Strasbourg'), 
('Montpellier'), 
('Bordeaux'), 
('Lille'), 
('Rennes'), 
('Reims'), 
('Le Havre'), 
('Saint-Étienne'),
('Toulon'), 
('Grenoble'), 
('Dijon'), 
('Angers'), 
('Nîmes'), 
('Villeurbanne'), 
('Saint-Denis'), 
('Le Mans'), 
('Clermont-Ferrand'), 
('Aix-en-Provence'), 
('Brest'), 
('Limoges'), 
('Tours'), 
('Amiens'), 
('Perpignan'), 
('Metz'), 
('Besançon'), 
('Orléans'), 
('Saint-Denis'), 
('Argenteuil'), 
('Rouen'), 
('Montreuil'), 
('Mulhouse'), 
('Caen'), 
('Nancy'), 
('Saint-Paul');

CREATE TABLE Adresse(
   id_adresse INT AUTO_INCREMENT,
   CP_adresse INT NOT NULL,
   AD_adresse VARCHAR(50) NOT NULL,
   id_Ville INT NOT NULL,
   PRIMARY KEY(id_adresse),
   FOREIGN KEY(id_Ville) REFERENCES Ville(id_Ville)
);

INSERT INTO Adresse (CP_adresse, AD_adresse, id_Ville) VALUES
(75001, '1 Rue de Rivoli', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Paris')),
(13001, '1 Place de la Mairie', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Marseille')),
(69001, '1 Place des Terreaux', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Lyon')),
(31000, '1 Place du Capitole', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Toulouse')),
(06000, '1 Promenade des Anglais', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Nice')),
(44000, '1 Rue de Strasbourg', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Nantes')),
(67000, '1 Place Kléber', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Strasbourg')),
(34000, '1 Place de la Comédie', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Montpellier')),
(33000, '1 Place de la Bourse', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Bordeaux')),
(59000, '1 Place Charles de Gaulle', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Lille')),
(35000, '1 Rue de la Mairie', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Rennes')),
(51100, '1 Place de la République', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Reims')),
(76600, '1 Rue Racine', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Le Havre')),
(42000, '1 Place Jean Jaurès', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Saint-Étienne')),
(83000, '1 Place de la Liberté', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Toulon')),
(38000, '1 Place Victor Hugo', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Grenoble')),
(21000, '1 Rue de la Préfecture', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Dijon')),
(49000, '1 Place du Ralliement', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Angers')),
(30000, '1 Rue de la Trésorerie', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Nîmes')),
(69100, '1 Place Grandclément', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Villeurbanne')),
(21000, '1 Rue de la jonas', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Lyon')),
(49000, '1 Place du Ralliement', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Marseille')),
(21000, '1 Rue de la qerg', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Toulon')),
(49000, '1 Place du Ralliement', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Grenoble')),
(21000, '1 Rue de la rgr', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Nice')),
(49000, '1 Place du Ralliement', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Marseille')),
(75001, '1 Rue de Rivoli', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Paris')),
(13001, '1 Place de la Mairie', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Marseille')),
(69001, '1 Place des Terreaux', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Lyon')),
(31000, '1 Place du Capitole', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Toulouse')),
(06000, '1 Promenade des Anglais', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Nice')),
(44000, '1 Rue de Strasbourg', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Nantes')),
(67000, '1 Place Kléber', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Strasbourg')),
(34000, '1 Place de la Comédie', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Montpellier')),
(33000, '1 Place de la Bourse', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Bordeaux')),
(59000, '1 Place Charles de Gaulle', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Lille')),
(35000, '1 Rue de la Mairie', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Rennes')),
(51100, '1 Place de la République', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Reims')),
(76600, '1 Rue Racine', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Le Havre')),
(42000, '1 Place Jean Jaurès', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Saint-Étienne')),
(21000, '1 Rue de la Préfecture', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Dijon')),
(49000, '1 Place du Ralliement', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Angers')),
(30000, '1 Rue de la Trésorerie', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Nîmes')),
(69100, '1 Place Grandclément', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Villeurbanne')),
(21000, '1 Rue de la jonas', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Lyon')),
(49000, '1 Place du Ralliement', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Marseille')),
(21000, '1 Rue de la qerg', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Toulon')),
(49000, '1 Place du Ralliement', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Grenoble')),
(21000, '1 Rue de la rgr', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Nice')),
(49000, '1 Place du Ralliement', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Marseille')),
(75001, '1 Rue de Rivoli', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Paris')),
(13001, '1 Place de la Mairie', (SELECT id_Ville FROM Ville WHERE nom_Ville = 'Marseille'));

CREATE TABLE Promotions(
   id_promotion INT AUTO_INCREMENT,
   nom_promotion VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_promotion)
);

INSERT INTO Promotions (nom_promotion) VALUES
('CPI A1'),
('CPI A2 INFO'),
('CPI A2 GENERALISTE'),
('CPI A2 BTP'),
('CPI A2 S3E'),
('CI M1 INFO FISE'),
('CI M1 GENERALISTE FISE'),
('CI M1 BTP FISE'),
('CI M1 S3E FISE'),
('CI M1 INFO FISA'),
('CI M1 GENERALISTE FISA'),
('CI M1 BTP FISA'),
('CI M1 S3E FISA'),
('CI M2 INFO FISE'),
('CI M2 GENERALISTE FISE'),
('CI M2 BTP FISE'),
('CI M2 S3E FISE'),
('CI M2 INFO FISA'),
('CI M2 GENERALISTE FISA'),
('CI M2 BTP FISA'),
('CI M2 S3E FISA'),
('CI M3 INFO FISE'),
('CI M3 GENERALISTE FISE'),
('CI M3 BTP FISE'),
('CI M3 S3E FISE'),
('CI M3 INFO FISA'),
('CI M3 GENERALISTE FISA'),
('CI M3 BTP FISA'),
('CI M3 S3E FISA'),
('Diplômé ING INFO'),
('Diplômé ING GEN'),
('Diplômé ING BTP'),
('Diplômé ING S3E');

CREATE TABLE Offre_stage(
   id_Offre_stage INT AUTO_INCREMENT,
   titre_offre_stage VARCHAR(100),
   Stage_Date_depart DATE NOT NULL,
   Stage_Date_fin DATE NOT NULL,
	Descriptif_offres_stage TEXT NOT NULL,
   Remuneration DECIMAL(15,2) NOT NULL,
   Date_publication DATE NOT NULL,
   NB_places_restantes INT NOT NULL,
   id_Ville INT NOT NULL,
   id_entreprise INT NOT NULL,
   PRIMARY KEY(id_Offre_stage),
   FOREIGN KEY(id_Ville) REFERENCES Ville(id_Ville),
   FOREIGN KEY(id_entreprise) REFERENCES Entreprise(id_entreprise)
);

INSERT INTO Offre_stage (titre_offre_stage, Stage_Date_depart, Stage_Date_fin,Descriptif_offres_stage, Remuneration, Date_publication, NB_places_restantes, id_Ville, id_entreprise) VALUES
('Développeur Web', '2024-03-01', '2024-06-01', 'Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web..Description de l\'offre de développeur Web...', 1500.00, '2024-02-13', 5, 1, 1),
('Analyste financier', '2024-03-15', '2024-05-15', 'Description de l\'entreprise :\nNotre entreprise est une start-up dynamique spécialisée dans le développement de solutions web innovantes. Nous sommes axés sur la création de produits qui simplifient la vie quotidienne des utilisateurs à travers des applications web conviviales et efficaces.\nMission :\nEn tant que stagiaire développeur web junior, vous serez intégré(e) à notre équipe de développement et participerez activement à la conception, au développement et à la maintenance de nos applications web. Vos principales missions incluront :\n\nParticiper à la conception et à la réalisation de nouvelles fonctionnalités pour nos applications web.\nCollaborer avec les membres de l\'équipe pour résoudre les problèmes techniques et optimiser les performances des applications.\nEffectuer des tests unitaires et participer à l\'assurance qualité pour garantir la stabilité et la fiabilité des produits.\nContribuer à la documentation technique et aux rapports de suivi des projets.\nProfil recherché :\nNous recherchons un(e) candidat(e) motivé(e) et passionné(e) par le développement web, avec les qualifications suivantes :\n\nÉtudiant(e) en informatique, génie logiciel ou domaine connexe, en cours de formation niveau Bac+3 minimum.\nSolides compétences en programmation web (HTML, CSS, JavaScript) et expérience avec au moins un framework JavaScript (React, Angular, Vue.js, etc.).\nConnaissance des principes de développement back-end (Node.js, PHP, Python, etc.) serait un plus.\nCapacité à travailler en équipe, excellentes compétences en communication et capacité à s\'adapter rapidement à de nouveaux environnements et technologies.\nAvantages :\nEn rejoignant notre équipe, vous aurez l\'opportunité de travailler sur des projets stimulants, d\'apprendre aux côtés de professionnels expérimentés et de contribuer à des solutions innovantes qui auront un impact réel sur les utilisateurs. De plus, nous offrons une ambiance de travail conviviale, des possibilités de formation continue et des perspectives d\'évolution au sein de l\'entreprise.\nModalités de candidature :\nSi vous êtes intéressé(e) par cette opportunité de stage et que vous correspondez au profil recherché, veuillez envoyer votre CV et une lettre de motivation à [adresse email] avant [date limite de candidature].', 2000.00, '2024-02-13',  3,  2,  2),
('Ingénieur mécanique', '2024-03-10', '2024-06-30', 'Description de l\'entreprise :\n
Notre entreprise est une start-up dynamique spécialisée dans le développement de solutions web innovantes. Nous sommes axés sur la création de produits qui simplifient la vie quotidienne des utilisateurs à travers des applications web conviviales et efficaces.Mission :
En tant que stagiaire développeur web junior, vous serez intégré(e) à notre équipe de développement et participerez activement à la conception, au développement et à la maintenance de nos applications web. Vos principales missions incluront :

Participer à la conception et à la réalisation de nouvelles fonctionnalités pour nos applications web.
Collaborer avec les membres de l\'équipe pour résoudre les problèmes techniques et optimiser les performances des applications.
Effectuer des tests unitaires et participer à l\'assurance qualité pour garantir la stabilité et la fiabilité des produits.
Contribuer à la documentation technique et aux rapports de suivi des projets.
Profil recherché :
Nous recherchons un(e) candidat(e) motivé(e) et passionné(e) par le développement web, avec les qualifications suivantes :

Étudiant(e) en informatique, génie logiciel ou domaine connexe, en cours de formation niveau Bac+3 minimum.
Solides compétences en programmation web (HTML, CSS, JavaScript) et expérience avec au moins un framework JavaScript (React, Angular, Vue.js, etc.).
Connaissance des principes de développement back-end (Node.js, PHP, Python, etc.) serait un plus.
Capacité à travailler en équipe, excellentes compétences en communication et capacité à s\'adapter rapidement à de nouveaux environnements et technologies.
Avantages :
En rejoignant notre équipe, vous aurez l\'opportunité de travailler sur des projets stimulants, d\'apprendre aux côtés de professionnels expérimentés et de contribuer à des solutions innovantes qui auront un impact réel sur les utilisateurs. De plus, nous offrons une ambiance de travail conviviale, des possibilités de formation continue et des perspectives d\'évolution au sein de l\'entreprise.

Modalités de candidature :
Si vous êtes intéressé(e) par cette opportunité de stage et que vous correspondez au profil recherché, veuillez envoyer votre CV et une lettre de motivation à [adresse email] avant [date limite de candidature].', 2500.00, '2024-02-13', 7, 3, 3),('Infirmier stagiaire', '2024-04-01', '2024-07-01', 'Description de l\'offre d\'infirmier stagiaire...', 1200.00, '2024-02-13', 4, 4, 4),
('Enseignant assistant', '2024-05-01', '2024-07-31', 'Description de l\'offre d\'enseignant assistant...', 1800.00, '2024-02-13', 6, 5, 5),('Assistant commercial', '2024-04-15', '2024-08-15', 'Description de l\'offre d\'assistant commercial...', 1600.00, '2024-02-13', 2, 6, 6),
('Agent immobilier', '2024-04-01', '2024-06-30', 'Description de l\'offre d\'agent immobilier...', 1900.00, '2024-02-13', 5, 7, 7),('Assistant administratif', '2024-03-20', '2024-05-20', 'Description de l\'offre d\'assistant administratif...', 1400.00, '2024-02-13', 4, 8, 8),
('Spécialiste marketing', '2024-04-10', '2024-07-10', 'Description de l\'offre de spécialiste marketing...', 2200.00, '2024-02-13', 3, 9, 9),('Rédacteur publicitaire', '2024-03-25', '2024-06-25', 'Description de l\'offre de rédacteur publicitaire...', 1700.00, '2024-02-13', 5, 10, 10),
('Logisticien', '2024-04-01', '2024-07-01', 'Description de l\'offre de logisticien...', 2000.00, '2024-02-13', 6, 11, 11),('Guide touristique', '2024-05-15', '2024-09-15', 'Description de l\'offre de guide touristique...', 1500.00, '2024-02-13', 3, 12, 12),
('Ingénieur électricien', '2024-05-01', '2024-08-31', 'Description de l\'offre d\'ingénieur électricien...', 2500.00, '2024-02-13', 7, 13, 13),('Chef de produit', '2024-04-10', '2024-07-10', 'Description de l\'offre de chef de produit...', 2100.00, '2024-02-13', 4, 14, 14),
('Technicien de laboratoire', '2024-04-01', '2024-07-01', 'Description de l\'offre de technicien de laboratoire...', 1800.00, '2024-02-13', 6, 15, 15),('Développeur d\'applications mobiles', '2024-03-20', '2024-06-20', 'Description de l\'offre de développeur d\'applications mobiles...', 2300.00, '2024-02-13', 5, 16, 16),
('Analyste des données', '2024-05-10', '2024-08-10', 'Description de l\'offre d\'analyste des données...', 1900.00, '2024-02-13', 2, 17, 17),('Designer graphique', '2024-04-05', '2024-07-05', 'Description de l\'offre de designer graphique...', 1600.00, '2024-02-13', 3, 18, 18),
('Technicien de maintenance', '2024-03-25', '2024-06-25', 'Description de l\'offre de technicien de maintenance...', 2000.00, '2024-02-13', 4, 19, 19),('Chef de projet', '2024-04-15', '2024-07-15', 'Description de l\'offre de chef de projet...', 2200.00, '2024-02-13', 6, 20, 20),
('Consultant en gestion', '2024-03-30', '2024-06-30', 'Description de l\'offre de consultant en gestion...', 1800.00, '2024-02-13', 5, 21, 21),('Styliste', '2024-04-20', '2024-07-20', 'Description de l\'offre de styliste...', 1700.00, '2024-02-13', 4, 22, 22),
('Artisan', '2024-05-01', '2024-08-31', 'Description de l\'offre d\'artisan...', 2000.00, '2024-02-13', 7, 23, 23),('Pharmacien assistant', '2024-05-15', '2024-09-15', 'Description de l\'offre de pharmacien assistant...', 1500.00, '2024-02-13', 3, 24, 24),
('Organisateur d\'événements', '2024-05-10', '2024-08-10', 'Description de l\'offre d\'organisateur d\'événements...', 2100.00, '2024-02-13', 5, 25, 25),('Développeur de logiciels', '2024-04-01', '2024-07-01', 'Description de l\'offre de développeur de logiciels...', 2400.00, '2024-02-13', 6, 26, 26),
('Responsable des ventes', '2024-03-20', '2024-06-20', 'Description de l\'offre de responsable des ventes...', 1900.00, '2024-02-13', 2, 27, 27),('Spécialiste en ressources humaines', '2024-04-10', '2024-07-10', 'Description de l\'offre de spécialiste en ressources humaines...', 1700.00, '2024-02-13', 4, 28, 28),
('Gestionnaire de projet', '2024-04-01', '2024-07-01', 'Description de l\'offre de gestionnaire de projet...', 2200.00, '2024-02-13', 5, 29, 29),('Consultant en stratégie', '2024-05-01', '2024-08-31', 'Description de l\'offre de consultant en stratégie...', 2000.00, '2024-02-13', 7, 30, 30),
('Concepteur multimédia', '2024-05-15', '2024-09-15', 'Description de l\'offre de concepteur multimédia...', 1600.00, '2024-02-13', 3, 2, 1),('Développeur Web', '2024-03-01', '2024-06-01', 'Description de l\'offre de développeur Web...', 1700.00, '2024-02-13', 4, 2, 2),
('Analyste financier', '2024-03-15', '2024-05-15', 'Description de l\'offre d\'analyste financier...', 2100.00, '2024-02-13', 6, 3, 3),('Ingénieur mécanique', '2024-03-10', '2024-06-30', 'Description de l\'offre d\'ingénieur mécanique...', 2600.00, '2024-02-13', 2, 4, 4),
('Infirmier stagiaire', '2024-04-01', '2024-07-01', 'Description de l\'offre d\'infirmier stagiaire...', 1300.00, '2024-02-13', 3, 9, 5),('Enseignant assistant', '2024-05-01', '2024-07-31', 'Description de l\'offre d\'enseignant assistant...', 1900.00, '2024-02-13', 5, 6, 6),
('Assistant commercial', '2024-04-15', '2024-08-15', 'Description de l\'offre d\'assistant commercial...', 1500.00, '2024-02-13', 7, 12, 7),('Agent immobilier', '2024-04-01', '2024-06-30', 'Description de l\'offre d\'agent immobilier...', 2000.00, '2024-02-13', 4, 8, 8),
('Assistant administratif', '2024-03-20', '2024-05-20', 'Description de l\'offre d\'assistant administratif...', 1600.00, '2024-02-13', 6, 9, 9),('Spécialiste marketing', '2024-04-10', '2024-07-10', 'Description de l\'offre de spécialiste marketing...', 2300.00, '2024-02-13', 2, 10, 10),
('Rédacteur publicitaire', '2024-03-25', '2024-06-25', 'Description de l\'offre de rédacteur publicitaire...', 1800.00, '2024-02-13', 3, 11, 11),('Logisticien', '2024-04-01', '2024-07-01', 'Description de l\'offre de logisticien...', 2100.00, '2024-02-13', 4, 12, 12),
('Guide touristique', '2024-05-15', '2024-09-15', 'Description de l\'offre de guide touristique...', 1600.00, '2024-02-13', 5, 13, 13),('Ingénieur électricien', '2024-05-01', '2024-08-31', 'Description de l\'offre d\'ingénieur électricien...', 2400.00, '2024-02-13', 6, 14, 14),
('Chef de produit', '2024-04-10', '2024-07-10','Description de l\'offre d\'ingénieur Chef de produit...', 2200.00, '2024-02-13', 7, 15, 15);
 
CREATE TABLE requérir(
   id_Offre_stage INT NOT NULL,
   id_Compétence INT NOT NULL,
   PRIMARY KEY(id_Offre_stage, id_Compétence),
   FOREIGN KEY(id_Offre_stage) REFERENCES Offre_stage(id_Offre_stage),
   FOREIGN KEY(id_Compétence) REFERENCES Compétence(id_Compétence)
);

INSERT INTO requérir (id_Offre_stage, id_Compétence) VALUES
(1, 1), (1, 2), (2, 9), (2, 14), (3, 35), (3, 38), (4, 11), (4, 21), (5, 25), (5, 29), (6, 6), (6, 27), (7, 18), (7, 33), (8, 8), 
(8, 12), (9, 7), (9, 15), (10, 3), (10, 28), (11, 20), (11, 24), (12, 23), (12, 25), (13, 10), (13, 17), (14, 5), (14, 22), (15, 4), 
(15, 13), (16, 16), (16, 32), (17, 31), (17, 34), (18, 19), (18, 30), (19, 26), (19, 36), (20, 39), (20, 20), (21, 2), (21, 8), 
(21, 15), (22, 6), (22, 12), (22, 20), (23, 1), (23, 5), (23, 19), (24, 10), (24, 18), (24, 24), (25, 3), (25, 9), (25, 16), (26, 7),
(26, 11), (26, 23), (27, 4), (27, 14), (27, 21), (28, 17), (28, 25), (28, 31), (29, 22), (29, 26), (29, 32), (30, 27), (30, 29), 
(30, 34), (31, 30), (31, 33), (31, 35), (32, 28), (32, 36), (32, 38), (33, 37), (33, 39), (33, 4), (34, 40), (34, 24), (34, 14), 
(35, 33), (35, 35), (35, 1), (36, 2), (36, 3), (36, 4), (37, 5), (37, 6), (37, 7), (38, 8), (38, 9), (38, 10), (39, 11), (39, 12), 
(39, 13), (40, 14), (40, 15), (40, 16), (41, 17), (41, 18), (41, 19), (42, 20), (42, 21), (42, 22), (43, 23), (43, 24), (43, 25), 
(44, 26), (44, 27), (44, 28), (45, 29), (45, 30), (45, 31);

CREATE TABLE Situer(
   id_entreprise INT NOT NULL,
   id_Ville INT NOT NULL,
   PRIMARY KEY(id_entreprise, id_Ville),
   FOREIGN KEY(id_entreprise) REFERENCES Entreprise(id_entreprise),
   FOREIGN KEY(id_Ville) REFERENCES Ville(id_Ville)
);

INSERT INTO Situer (id_entreprise, id_Ville) VALUES
(1, 1), (1, 2), (2, 9), (2, 14), (3, 35), (3, 38), (4, 11), (4, 21), (5, 25), (5, 29), (6, 6), (6, 27), (7, 18), (7, 33), (8, 8), 
(8, 12), (9, 7), (9, 15), (10, 3), (10, 28), (11, 20), (11, 24), (12, 23), (12, 25), (13, 10), (13, 17), (14, 5), (14, 22), (15, 4), 
(15, 13), (16, 16), (16, 32), (17, 31), (17, 34), (18, 19), (18, 30), (19, 26), (19, 36), (20, 39), (20, 20), (21, 2), (21, 8), 
(21, 15), (22, 6), (22, 12), (22, 20), (23, 1), (23, 5), (23, 19), (24, 10), (24, 18), (24, 24), (25, 3), (25, 9), (25, 16), (26, 7),
(26, 11), (26, 23), (27, 4), (27, 14), (27, 21), (28, 17), (28, 25), (28, 31), (29, 22), (29, 26), (29, 32), (30, 27), (30, 29), 
(30, 34);

CREATE TABLE Candidater(
   id_utilisateur INT NOT NULL,
   id_Offre_stage INT NOT NULL,
   cv_utilisateur_offre LONGBLOB NOT NULL,
   lettre_motiv_utilisateur TEXT NOT NULL,
   PRIMARY KEY(id_utilisateur, id_Offre_stage),
   FOREIGN KEY(id_utilisateur) REFERENCES Utilisateur(id_utilisateur),
   FOREIGN KEY(id_Offre_stage) REFERENCES Offre_stage(id_Offre_stage)
);

INSERT INTO Candidater (id_utilisateur, id_Offre_stage, cv_utilisateur_offre, lettre_motiv_utilisateur) VALUES
(1, 5, 'CV', ' Lettre de motiv'),
(1, 4, 'CV', ' Lettre de motiv'),
(1, 2, 'CV', ' Lettre de motiv'),
(1, 3, 'CV', ' Lettre de motiv'),
(2, 5, 'CV', ' Lettre de motiv'),
(3, 4, 'CV', ' Lettre de motiv'),
(9, 2, 'CV', ' Lettre de motiv'),
(5, 3, 'CV', ' Lettre de motiv'),
(9, 16, 'CV', ' Lettre de motiv'),
(4, 34, 'CV', ' Lettre de motiv'),
(15, 35, 'CV', ' Lettre de motiv'),
(2, 15, 'CV', ' Lettre de motiv'),
(7, 14, 'CV', ' Lettre de motiv'),
(7, 20, 'CV', ' Lettre de motiv'),
(1, 25, 'CV', ' Lettre de motiv');


CREATE TABLE Evaluer(
   id_utilisateur INT NOT NULL,
   id_entreprise INT NOT NULL,
   note_de_lentreprise INT NOT NULL,
   PRIMARY KEY(id_utilisateur, id_entreprise),
   FOREIGN KEY(id_utilisateur) REFERENCES Utilisateur(id_utilisateur),
   FOREIGN KEY(id_entreprise) REFERENCES Entreprise(id_entreprise)
);

INSERT INTO Evaluer (id_utilisateur, id_entreprise, note_de_lentreprise) VALUES
( 4, 9, 15), ( 1, 1, 14), ( 6, 20, 19), ( 2, 5, 10), ( 3, 7, 15), ( 4, 16, 5), ( 19, 17, 20), ( 35, 17, 17), ( 28, 18, 9), 
( 9, 11, 11), ( 25, 2, 16), ( 34, 18, 20), ( 20, 12, 15);

CREATE TABLE Contenir(
   id_utilisateur INT NOT NULL,
   id_Ville INT NOT NULL,
   PRIMARY KEY(id_utilisateur, id_Ville),
   FOREIGN KEY(id_utilisateur) REFERENCES Utilisateur(id_utilisateur),
   FOREIGN KEY(id_Ville) REFERENCES Ville(id_Ville)
);

INSERT INTO Contenir (id_utilisateur, id_Ville) VALUES
(1, 1), (1, 2), (1, 3), (1, 4), (1, 5), (1, 6), (1, 7), (1, 8), (1, 9), (1, 10), (1, 11), (1, 12), (1, 13), (1, 14), (1, 15), 
(1, 16), (1, 17), (1, 18), (1, 19), (1, 20), (1, 21), (1, 22), (1, 23), (1, 24), (1, 25), (1, 26), (1, 27), (1, 28), (1, 29), 
(1, 30), (1, 31), (1, 32), (1, 33), (2, 1), (2, 2), (2, 3), (2, 4),(3, 1), (3, 2), (3, 3), (3, 4),(4, 1), (4, 2), (4, 3), (4, 4),
(5, 1), (5, 2), (5, 3), (5, 4),(6, 1), (6, 2), (6, 3), (6, 4), (7, 1), (7, 2), (7, 3), (7, 4),(8, 1), (8, 2), (8, 3), (8, 4),
(9, 1), (9, 2), (9, 3), (9, 4),(10, 1), (10, 2), (10, 3), (10, 4), (11, 5),(12, 6),(13, 7),(14, 8),(15, 9),(16, 10),(17, 11),
(18, 12),(19, 13),(20, 14),(21, 15),(22, 16),(23, 17),(24, 18),(25, 19),(26, 20), (27, 21),(28, 22),(29, 23),(30, 24),(31, 25),
(32, 26),(33, 27),(34, 28),(35, 29),(36, 30),(37, 31),(38, 5),(39, 6),(40, 7),(41, 8),(42, 9), (43, 1),(44, 2),(45, 1),(46, 1);

CREATE TABLE Assigner(
   id_utilisateur INT NOT NULL,
   id_promotion INT NOT NULL,
   PRIMARY KEY(id_utilisateur, id_promotion),
   FOREIGN KEY(id_utilisateur) REFERENCES Utilisateur(id_utilisateur),
   FOREIGN KEY(id_promotion) REFERENCES Promotions(id_promotion)
);

INSERT INTO Assigner (id_utilisateur, id_promotion) VALUES
(1, 1), (2, 2), (3, 3), (4, 4), (5, 1), (6, 2), (7, 3), (8, 4), (9, 1), (10, 2), (11, 3), (12, 4), (13, 1), (14, 2), (15, 3),
(16, 4), (17, 1), (18, 2), (19, 3), (20, 4), (21, 1), (22, 2), (23, 3), (24, 4), (25, 1), (26, 2), (27, 3), (28, 4), (29, 1),
(30, 2), (31, 3), (32, 4), (33, 1), (34, 2), (35, 3), (36, 4), (37, 1), (38, 2), (39, 3), (40, 4), (41, 5), (42, 6), (43, 7),
(44, 8), (45, 9), (46, 10), (47, 11), (48, 12), (49, 13), (50, 14), (51, 15);
CREATE TABLE Destiner(
   id_Offre_stage INT NOT NULL,
   id_promotion INT NOT NULL,
   PRIMARY KEY(id_Offre_stage, id_promotion),
   FOREIGN KEY(id_Offre_stage) REFERENCES Offre_stage(id_Offre_stage),
   FOREIGN KEY(id_promotion) REFERENCES Promotions(id_promotion)
);

INSERT INTO Destiner (id_Offre_stage, id_promotion) VALUES
(1, 1), (1, 2),(2, 3), (2, 4),(3, 5), (3, 6), (3, 7),(4, 8), (4, 9), (4, 10),(5, 11),(6, 12), (6, 13),(7, 14), (7, 15), (7, 16),
(8, 17), (8, 18),(9, 19), (9, 20), (9, 21), (10, 22), (10, 23),(11, 24), (11, 25), (11, 26),(12, 27), (12, 28),(13, 29), (13, 30), 
(13, 31),(14, 32),(15, 33), (15, 1),(16, 28), (16, 5),(17, 7), (17, 25), (17, 24), (18, 18), (18, 20), (18, 2),(19, 32), (19, 33), 
(19, 24),(20, 1), (20, 2), (20, 3),(21, 4), (21, 5),(22, 6), (22, 7), (22, 8),(23, 9), (23, 10), (23, 11),(24, 12), (25, 13), (25, 14),
(26, 15), (26, 16), (26, 17),(27, 18), (27, 19),(28, 20), (28, 21), (28, 22),(29, 23), (29, 24), (29, 25),(30, 26),(31, 27), (31, 28),
(32, 29), (32, 30),(33, 31), (33, 32), (33, 33),(34, 1), (34, 2),(35, 3), (35, 4),(36, 5), (36, 6), (36, 7),(37, 8), (37, 9), (37, 10),
(38, 11), (39, 12), (39, 13),(40, 14), (40, 15), (40, 16),(41, 17), (41, 18),(42, 19), (42, 20), (42, 21),(43, 22), (43, 23),(44, 24), 
(44, 25), (44, 26),(45, 27), (45, 28);

CREATE TABLE mettre_en_favori(
   id_utilisateur INT NOT NULL,
   id_Offre_stage INT NOT NULL,
   PRIMARY KEY(id_utilisateur, id_Offre_stage),
   FOREIGN KEY(id_utilisateur) REFERENCES Utilisateur(id_utilisateur),
   FOREIGN KEY(id_Offre_stage) REFERENCES Offre_stage(id_Offre_stage)
);

INSERT INTO mettre_en_favori (id_utilisateur, id_Offre_stage) VALUES
(1, 1), (1, 2), (2, 4),(3, 5), (3, 6),(4, 7), (4, 8),(5, 9), (6, 13),(7, 14), (7, 15), (7, 16),(8, 17), (8, 18), (9, 19), (9, 20), 
(9, 21),(10, 22), (10, 23),(11, 24), (11, 25),(12, 26), (12, 27),(13, 28), (13, 29), (13, 30),(14, 31), (14, 32),(15, 33), (15, 34), 
(15, 35), (16, 36), (16, 37), (30, 23),(31, 24), (31, 25),(32, 26), (32, 27),(33, 28), (33, 29), (33, 30), (34, 31), (34, 32),(35, 33),
(35, 34), (35, 35),(36, 36), (42, 4),(43, 5), (43, 6),(44, 7), (44, 8),(45, 9), (45, 10), (45, 11),(46, 12), (46, 13), (47, 14), 
(47, 15), (47, 16),(48, 17), (48, 18),(49, 19), (49, 20), (49, 21),(50, 22), (50, 23);