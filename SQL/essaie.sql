-- Inserts pour la table PRESENTATION
INSERT INTO PRESENTATION (intitule_description, `description`, intitule_expertise, expertise, intitule_autre, autre)
VALUES ("Je suis Alex, un photographe passionné qui transforme vos moments spéciaux en souvenirs durables. Mon expertise et ma créativité se combinent pour vous offrir des images exceptionnelles. ", 
        "En tant que photographe professionnel, je mets l'accent sur la capture de l'émotion et la création d'images qui racontent une histoire. Mon approche artistique et mon attention aux détails garantissent des résultats mémorables pour toutes vos occasions.",
        "Mon expertise approfondie",
        "Je possède une expérience approfondie dans la photographie de portraits, de mariages et d'événements spéciaux. Mon style unique et ma capacité à créer une connexion authentique avec mes sujets font de moi un choix idéal pour vos besoins photographiques.",
        "Autre service proposé",
        "En plus de la photographie, je propose des séances de retouche photo professionnelles pour garantir que chaque image atteigne son plein potentiel artistique.");

-- Inserts pour la table PRESTATIONS
INSERT INTO PRESTATIONS (libelle, prix, `description`)
VALUES ("Forfait Mariage Complet", 1200, "Ce forfait comprend une couverture complète de votre journée spéciale, des préparatifs au dernier moment de la réception. Recevez une galerie complète de photos haute résolution et une séance de retouche professionnelle.");

INSERT INTO PRESTATIONS (libelle, prix, `description`)
VALUES ("Séance Portrait en Extérieur", 150, "Une séance photo d'une heure dans un cadre extérieur magnifique. Idéal pour les portraits individuels, les couples ou les séances familiales.");

INSERT INTO PRESTATIONS (libelle, prix, `description`)
VALUES ("Événement Corporatif", 500, "Capturez les moments forts de votre événement d'entreprise avec une couverture complète. Des images professionnelles pour vos rapports annuels, sites web et réseaux sociaux.");

INSERT INTO PRESTATIONS (libelle, prix, `description`)
VALUES ("Séance Nouveau-Né", 250, "Une séance photo douce et délicate pour capturer les premiers jours de votre nouveau-né. Des images tendres et intimes pour chérir ces moments spéciaux.");

INSERT INTO PRESTATIONS (libelle, prix, `description`)
VALUES ("Forfait Événement Spécial", 800, "Un forfait personnalisable pour couvrir votre événement spécial. Des photos professionnelles qui captureront l'essence de la journée."); 

-- Inserts pour la table OPTIONS avec la colonne libelle
-- Inserts pour des options liées aux prestations
INSERT INTO OPTIONS (libelle) VALUES ('Option de Retouche Avancée');
INSERT INTO OPTIONS (libelle) VALUES ('Impression sur Toile');
INSERT INTO OPTIONS (libelle) VALUES ('Séance Photos Supplémentaire');
INSERT INTO OPTIONS (libelle) VALUES ('Galerie Privée en Ligne');

-- Ajoutez autant d'options que nécessaire
