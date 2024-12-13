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

### Using XAMPP or Laragon
1. Clonez le repository
   ```bash
   git clone https://github.com/Youcode-Classe-E-2024-2025/ismail-baoud-package
   ```
2. Configure your local web server (XAMPP or Laragon) to point to the `index.php` fichie of your project.

3. Create a new database and import the SQL schema located in the `database` directory.

4. Update the database connection details in the `src/config/database.php` file.

5. Start your local web server and navigate to the project URL in your web browser.

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


