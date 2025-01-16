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

1. Clonez le projet sur votre machine locale :
   ```bash
   git clone https://github.com/zenon12/systeme-de-gestion-de-bibliotheque.git
   ```
2. Accédez au répertoire du projet :
   ```bash
   cd systeme-de-gestion-de-bibliotheque
   ```
3. Importez la base de données :
  ``` bash
   mysql -u root -p bibliotheque < "C:\Users\Elitebook-PC\projet-personnel-mudey\php_mysql\systeme_gestion_bibliothèque\database\gestion_biblioth__que.sql"
```

4. Configurez la connexion à la base de données dans `config.php`.

## Utilisation

Utilisation
Le système de gestion de bibliothèque permet aux utilisateurs de gérer les opérations courantes liées à une bibliothèque, 
telles que l’ajout de livres, la gestion des emprunts et des retours, ainsi que la recherche de livres. Voici comment utiliser le projet :

**1. Lancement de l'application**

Assurez-vous que votre serveur web (par exemple,XAMPP,WAMP ou MAMP) et votre serveur de base de données sont opérationnels.
Placez les fichiers du projet dans le répertoire de votre serveur (par exemple, htdocs pour XAMPP).\n
Accédez à l'application via votre navigateur à l'adresse suivante :

``` 
https://localhost/systeme-degestion-de-bibliothque
``` 
**2. Fonctionnalités principales**

a. Gestion des utilisateurs

Inscription : Les utilisateurs doivent créer un compte en fournissant leurs informations personnelles.
Connexion : Les utilisateurs enregistrés peuvent se connecter pour accéder à leurs fonctionnalités personnalisées.

b. Gestion des livres

Ajouter de nouveaux livres : Accédez à la section Ajouter un livre et renseignez les détails requis (titre, auteur, année, genre, ISBN, etc.).

c. Gestion des emprunts

Emprunter un livre : Les utilisateurs peuvent rechercher un livre disponible et effectuer une demande d'emprunt.
Retourner un livre : Les utilisateurs doivent enregistrer le retour d’un livre après la période d’emprunt.

d. Recherche

Recherche avancée : Recherchez des livres par titre, auteur, ou genre en utilisant la section recherche.

**3. Technologies utilisées**

Backend : PHP avec PDO pour interagir avec la base de données.
Base de données : MySQL.
Frontend : HTML, CSS, JavaScript.


