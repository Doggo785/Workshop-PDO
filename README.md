# Workshop PDO

Ce projet est un exemple d'utilisation de PDO (PHP Data Objects) pour se connecter à une base de données MySQL.

## Configuration

1. Renommez le fichier `database.exemple.php` en `database.php`.
2. Modifiez les informations de connexion à la base de données dans le fichier `database.php` :
    - `$host` : l'hôte de la base de données (par défaut `localhost`).
    - `$dbname` : le nom de la base de données.
    - `$user` : le nom d'utilisateur de la base de données.
    - `$password` : le mot de passe de l'utilisateur de la base de données.

## Utilisation

Pour tester la connexion à la base de données, exécutez le fichier `database.php` dans votre navigateur ou via la ligne de commande.

```bash
php config/database.php
```

## Fonctionnalités

- **Gandalf Finder** : Vérifie si l'utilisateur "Gandalf" existe dans la base de données.
- **List User** : Affiche la liste des pseudos des utilisateurs.
- **Request User** : Formulaire de connexion pour vérifier le pseudo et le mot de passe d'un utilisateur.

## Exécution

Pour exécuter les différents scripts, utilisez les liens suivants dans votre navigateur :

- [Gandalf Finder](request/gandalf_finder.php)
- [List User](request/list_user.php)
- [Request User](request/request_user.html)