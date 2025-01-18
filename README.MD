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
   cd votre repository
   ```
3. Importez la base de données :
  ``` bash
   mysql -u root -p database name < path to database
```

4. Configurez la connexion à la base de données dans `config.php`.

## Utilisation

Le système de gestion de bibliothèque permet aux utilisateurs de gérer les opérations courantes liées à une bibliothèque, 
telles que l’ajout de livres, la gestion des emprunts et des retours, ainsi que la recherche de livres. Voici comment utiliser le projet :

**1. Lancement de l'application**

Assurez-vous que votre serveur web (par exemple,XAMPP,WAMP ou MAMP) et votre serveur de base de données sont opérationnels.  
Dans ce projet on a travaillé sur le XAMPP.<br>
**XAMPP v3.3.0**<br>
- lancer le serveur **Apache** et le serveur **MySQL** dans le control panel de **XAMPP**.<br>
- Placez les fichiers du projet dans le répertoire de votre serveur **htdocs**.<br>
- Accéder à l'outil **phpMyAdmin** via votre navigateur web en utilisant l'url suivant:
```
  http://localhost/phpmyadmin/
```
-  Une fois sur **phpMyAdmin** cliqué sur **SQL** qui se trouve dans le menu de **phpMyAdmin**. Ensuite
utiliser la commander suivante pour créer une base de donnée:
```
 CREATE DATABASE  handle_library ;
```
- Maintenant importer la base de donnée en utilisant les commandes suivantes sur git bash ou l'invité de commande :<br>
   - Accédez au répertoire du projet :

       ```bash
       cd votre repository dans le dossier 'htdocs'
      ```

   - Assurez-vous que l'executable de mysql se trouve dans votre variable d'environnement

      ``` bash
        mysql -u root -p handle_library < path to database
      ```


- Accédez à l'application via votre navigateur à l'adresse suivante :

``` 
http://localhost/systeme-de-gestion-de-bibliotheque
``` 

**2.Compte d'essai**<br>
   **email:** mariama9024@gmail.com<br>
   **password:** Azerty123@<br>
   **rôle:** Administrateur

**3. Fonctionnalités principales**

a. Gestion des utilisateurs

Inscription : Les utilisateurs doivent créer un compte en fournissant leurs informations personnelles.<br>
Connexion : Les utilisateurs enregistrés peuvent se connecter pour accéder à leurs fonctionnalités personnalisées.

b. Gestion des livres

Ajouter de nouveaux livres : Accédez à la section Ajouter un livre et renseignez les détails requis (titre, auteur, année, genre, ISBN, etc.).

c. Gestion des emprunts

Emprunter un livre : Les utilisateurs peuvent rechercher un livre disponible et effectuer une demande d'emprunt.<br>
Retourner un livre : Les utilisateurs doivent enregistrer le retour d’un livre après la période d’emprunt.

d. Recherche

Recherche avancée : Recherchez des livres par titre, auteur, ou genre en utilisant la section recherche.

**4. Technologies utilisées**

Backend : PHP avec PDO pour interagir avec la base de données.<br>
Base de données: MySQL.<br>
FrontEnd:HTML, CSS, Javascript.<br>



