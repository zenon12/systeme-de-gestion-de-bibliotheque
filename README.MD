# Système de Gestion de Bibliothèque

## Introduction

Ce projet est un système de gestion de bibliothèque développé en PHP. Il permet de gérer les livres, les membres et les emprunts de manière efficace.

## Fonctionnalités

- Gestion des livres (ajout, suppression, modification)
- Gestion des membres (ajout, suppression, modification)
- Gestion des emprunts (enregistrement, retour)

## Prérequis

- Serveur web (Apache,Xampp, Nginx, etc.)
- PHP 7.4 ou supérieur
- Base de données MySQL

## Installation

1. Clonez le dépôt :
   ```bash
   git clone https://github.com/zenon12/systeme-de-gestion-de-bibliotheque.git
   ```
2. Accédez au répertoire du projet :
   ```bash
   cd systeme-de-gestion-de-bibliotheque
   ```
3. Importez la base de données :
   ```sql
   mysql -u root -p gestion_bibliothèque < /database/gestion_bibliothèque.sql
   ```
4. Configurez la connexion à la base de données dans `config.php`.

## Utilisation

- Accédez à l'application via votre navigateur web.
- Utilisez les fonctionnalités pour gérer les livres, les membres et les emprunts.

## Contribuer

Les contributions sont les bienvenues ! Veuillez soumettre une pull request pour toute amélioration ou correction de bug.

## Licence

Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.
