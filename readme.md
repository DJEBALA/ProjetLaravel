
<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>
<h3>Introduction </h3>
<p> Dans le cadre de projet web, on a réaliser un blog d'articles qui permet de les consulter, voir les nouveaux articles et aussi créer un compte pour les utilisateur de blog </p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](http://patreon.com/taylorotwell):

- **[Vehikl](http://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Styde](https://styde.net)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
 

 ## Déscription de Projet
 <p>Le Projet de création d’une application web avec le framework PHP Laravel rentre dans l'apprentissage de développement web coté serveur, on a développé un blog qui permet de consulter des articles et aussi un utilisateur peut créer son propre compte.</p>

 ## Conditions d'utilisation
 <p>Pour utiliser cette application, faut avoir les élements suivants:</p>
 <ul>
 <li>Version PHP  5.5.9 minimum</li>
 <li>Configurer Laravel pour connecter avec SQlite</li>
 <li>Composer</li>
 <li>Git</li>
 </ul>

 ## Etapes d'installation 
 <p>Pour utiliser l'application, faut suivre les étapes d'installation:</p>
 
 <h4>Etape 1 : Installer l'apllication</h4>
 <ul>
 <li><p>- Ouvrez un terminal (cmd) et placez vous dans le répertoire ou vous voulez créer votre application.</p></li>
 <li><p>- Excutez ces commandes: </p></li> 
 <li><p>- git clone https://github.com/DJEBALA/ProjetLaravel.git</p></li>
 <li><p>- composer install<p></li>
 </ul>

 <h4> Etape 2 : Configuration de fichier .env</h4>
 <ul>
 <li><p>- Configurer le fichier .env, ouvrez le dossier du projet dans un éditeur de texte.</p></li>
  <li><p>Renommer le fichier ".env.example" par ".env"</p></li>
  <li><p>- Executer la commande : php artisan key:generate, pour générer une cé de cryptage de l'application.</p></li>
  <li><p>- Ouvrez le fichier .env et changer la ligne : DB_CONNECTION=mysql par DB_CONNECTION=sqlite et commenter les autres lignes par #<p></li>
  </ul>  
  <h4>Etape 3: Configuration de la BD</h4> 
  <ul>
  <li><p>- Créer un fichier database.sqlite dans le répertoire database</p></li>
   <li><p>- Faire les Migration: dans le terminal exécuter cette commande  : php artisan migrate</p></li>
   <li><p>Migration: dans le terminal exécuter cette commande : php artisan migrate:refresh --seed -v </p></li>
   </ul>

   <h4>Etape 4 : Testez l'application</li>
   <ul>
    <li><p>- Lancez le serveur : php artisan serve ,dans le terminal</p></li>
    <li><p>- Ouvrez une page web et tapez URL : http://localhost:8000</p></li>
    </ul>
    </ul>
    <h4>- Surfez sur l'application</h4>
    <ul>
    <li><p> Dans cette partie vous trouverez tous ce qu'on a implimenté et aussi pour tester  les fonctionnalités.</p></li>
    <li><p> - Une fois le serveur lancé, insérez http://localhost:8000   dans la barre d'url, il s'agit de la page d'acceuil du projet.</p></li>
    </ul>
    <h4>Acceuil</h4>
    <p> l'url de cette page home dans cette partie du site (home), on a une barre de navigation contenant les boutton suivant :
    <ul>
<li> Home : Page d'acceuil</li> 
<li> Article : dirige vers la page Article où on peut trouver tous les articles</li>
<li>Contacte </li>
<li> Login et enregistrer </li>

<h4>Afficher un Article<h4>
<p> On peut afficher un article en cliquant sur le titre de l'article souhaité dans l'acceil ou dans la page article<p>

<h4>Les Fonctionnalités</h4>
<ul>
   <li> Authentification </li>
<p> pour s'authtifier faut cliquer sur le bouton "Login" en haut à droite de la page et remplir le formulaire, si un utilisateur n'a pas encore créer un compte, il suffit de cliquer sur le boutton "Enregistrer", un formulaire lui sera afficher pour créer son compte</p>