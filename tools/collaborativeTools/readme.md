Cette extension permet d'intégrer des outils collaboratifs à YesWiki. Elle a été conçue de façon complètement modulaire pour une meilleure lisibilité du code.

Pour ajouter un nouvel outil :
I. Composants

1. Créer l'action dans le dossier "actions".
2. Ajouter les paramètres de configuration nécessaires dans le fichier "config.yaml", comme les url des instances des outils par exemple.
3. Créer le fichier twig dans le dossier "templates". Celui-ci permettra de créer la vue de l'outil : un bouton, une iframe, ...

II. Formulaire

1. Le fichier presentation/javascripts/collaborativetools.js permet de configurer le champs du formulaire.
2. Le fichier BazarAction\_\_.php permet de forcer le chargement de ce script afin d'inclure le champs dans les autres champs Bazar.
3. Dans le fichier "fields/CollaborativeToolsField.php", ajoutez votre outil dans la variable "options" et dans la fonction renderStatic()
4. Le fichier templates/inputs/collaborativetools.twig permet de configurer l'apparence du champs select.
5. Dans le fichier templates/fields/collaborativetools.twig, ajoutez la vue de votre outil que vous aviez créer dans la partie I. 3.
