AbsolumentpasTV
========================

Welcome to the Symfony project made by Team 17 aka Absolument Pas

Members
--------------
* [Camille Basset][17] - *Front-end Developer*
* [Léa Bandinelli][16] - *Designer, Front-end Developer*
* [Maxime Lussiana][14] - *Front-end & Developer*
* [Théo Bacholier][18] - *Lead Designer*
* [Arthur Chassin][19] - *Designer*
* [Antoine Gourtay][15] - *Lead Developer*

How to install
--------------

```
git clone https://github.com/AntoineGourtayHetic/absolumentpas-tv.git
cd absolumentpas-tv-master

php bin/symfony-requirements
composer install
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --dump-sql
php bin/console doctrine:schema:update --force
``` 

--------------

###Bundles used

*FOSUserBunble* - User gestion
*EasyAdminBundle* - Content administration

[14]: https://github.com/lussiana-m
[15]: https://github.com/AntoineGourtayHetic
[16]: https://github.com/leabandinelli
[17]: https://github.com/camillebasset
[18]: https://github.com/qrek
[19]: https://github.com/zachariass