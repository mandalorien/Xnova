
XNOVA
=====
<img align="left" width="0" height="192px" hspace="10"/>

> The [open source](https://en.wikipedia.org/wiki/Open-source_software) mobile [MMO](https://en.wikipedia.org/wiki/Massively_multiplayer_online_game) game.
[![MIT License](https://img.shields.io/badge/license-GPLv3-007EC7.svg?style=flat-square)](/LICENSE) 

###### Projet
> 4 bundles :
- CoreBundle (qui contiendra les méthodes importante + le systéme de connexion ).
- GameBundle (qui contiendra l'essentiel du jeu ).
- PluginsBundle (qui contiendra les modules à ajouter exmple : Marchand , Paypal ).
- BoardBundle (qui contiendra l'intégralité du forum ) .

###### Symfony
- version 3.1.6
- si vous clonez la version de Xnova n'oubliez pas d'effectuer la liste des commandes si dessous (MAJ fréquente)
```DOS
- - php composer.phar update
- - php bin/console doctrine:database:create
- - php bin/console doctrine:schema:update --dump-sql
- - php bin/console doctrine:schema:update --force
- - php bin/console assets:install
```

###### Config parameters.xml

```DOS
> Incenteev\ParameterHandler\ScriptHandler::buildParameters
Creating the "app/config/parameters.yml" file
Some parameters are missing. Please provide them.
database_host (127.0.0.1): localhost
database_port (null):
database_name (symfony): xnova (ou ce que vous voulez)
database_user (root):
database_password (null):
mailer_transport (smtp):
mailer_host (127.0.0.1):
mailer_user (null):
mailer_password (null):
secret (ThisTokenIsNotSoSecretChangeIt): xnova_symfony
```

###### Information

- Lors d'une nouvelle fonctionnalité , créez une branche puis indiqué feature_nomdevotrenouvellefonctionnalité
- Lors d'un fix , créez une branche puis indiqué fix_nomdevotrenouvellefonctionnalité

[utilisation des synthaxe de github ](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet)
