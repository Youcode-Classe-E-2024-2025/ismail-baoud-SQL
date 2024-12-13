# 🚀 JavaScript Package Management System

## 📝 Projet de Gestion de Packages JavaScript

### 🎯 Objectif du Projet
Ce système de gestion de packages vise à centraliser et simplifier la gestion des packages JavaScript pour une communauté de développeurs.

### ✨ Fonctionnalités Principales
- Gestion centralisée des packages JavaScript
- Suivi des versions de packages
- Gestion des informations des auteurs
- Recherche intuitive des packages

### 🏗️ Architecture du Projet

#### Structure des Répertoires
```
package-management-system/
│
├── database/
│   └── database.sql
│
├── src/
│   ├── config/
│   │   ├──    connection.php
│   │   └── //connection_line.php
│   ├── controllers/
│   │   └── add_all_data.php
│   ├── models/ 
│   │   └── 
│   └── views/
│       ├── user_pages
│       │   ├── display_relation_versions_user.php
│       │   ├── display_relations_user.php
│       │   └── home_user.php
│       │
│       ├── add_form.php
│       ├── display_authors.php
│       ├── display_packages.php
│       ├── display_relation_versions.php
│       ├── display_relations.php
│       └── display_versions.php
│
├── public/
│   ├── index.php
│   └── assets/
│       ├── css/
│       │   └── style.css
│       └── js/
│           └── main.js
│       
│
└── README.md
```

### 📦 Modèle de Données

#### Entités Principales
1. **Packages**
   - ID unique
   - Nom du package
   - Description
   - Date de création

2. **Auteurs**
   - ID unique
   - Nom
   - Email

3. **Versions**
   - ID unique
   - Numéro de version
   - Date de publication

### 🛠️ Prérequis Techniques
- PHP
- MySQL
- Serveur web Apache
- Navigateur moderne

### 🚦 Installation

#### Étapes d'Installation

### Using XAMPP
1. Clonez le repository
   ```bash
   git clone https://github.com/Youcode-Classe-E-2024-2025/ismail-baoud-package
   ```
. Placez le dossier du projet dans le répertoire `htdocs` de XAMPP.

3. Lancez le panneau de configuration XAMPP et démarrez les modules Apache et MySQL.

4. Rendez-vous dans votre navigateur web et accédez à l'URL `http://localhost/MYPROJECTPHP/index.php`.

### Using XAMPP

2. Placez le dossier du projet dans le répertoire `www` de Laragon.

3. Lancez Laragon et cliquez sur "Start All" pour démarrer le serveur web et la base de données.

4. Rendez-vous dans votre navigateur web et accédez à l'URL `http://mon-projet-php.test`.

## Configuration
1. Créez une nouvelle base de données pour le projet.

2. Importez le schéma SQL situé dans le dossier `database` de votre projet.

3. Ouvrez le fichier `src/config/connection_db.php` et mettez à jour les paramètres de connexion à la base de données avec vos propres identifiants.

## Démarrage
Une fois l'installation et la configuration terminées, vous pouvez démarrer le serveur web local et accéder à l'application.

1. Depuis XAMPP, cliquez sur le bouton "Start" pour le module Apache.
2. Depuis Laragon, cliquez sur "Start All" pour démarrer tous les services.

Vous pouvez ensuite ouvrir votre navigateur web et accéder à l'URL correspondante :
- XAMPP : `http://localhost/MYPROJECTPHP/index.php`
- Laragon : `http://myprojectphp.test/index.php`

## Utilisation
Une fois l'application lancée, vous pouvez :

- Ajouter de nouveaux packages et auteurs et version
- Consulter et rechercher les packages et auteurs existants
- Gérer les versions des packages et les contributions des auteurs

### 🔍 Fonctionnalités
- Ajouter des packages
- Gérer les versions
- Rechercher des packages
- Consulter les détails des auteurs

### 🤝 Contribution
1. Forkez le projet
2. Créez une branche pour votre fonctionnalité
3. Commitez vos modifications
4. Créez une pull request


