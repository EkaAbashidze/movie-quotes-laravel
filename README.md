## About Movie Quotes App

The Movie Quotes App is a web application built with the Laravel framework and utilizes a MySQL database. The app displays a random quote from a movie on the homepage, and also includes a page for each movie that displays all of the quotes associated with it.

The app utilizes models to define the structure of the data and the relationships between the different tables. Migrations are used to create and modify the database schema, while requests are used to validate incoming data.

Controllers handle user requests and interact with the models to retrieve and manipulate data. Factories are used to generate fake data for testing purposes, and seeders are used to populate the database with initial data.

The app also utilizes Laravel's language resources for localization and Spatie Translatable for translating the quotes into different languages.

The back-end includes CRUD functionality for managing movies and their associated quotes. The app also includes authorization and a dashboard for admin user, who has  the ability to add, modify, edit, and delete movies.

#
### Table of Contents
* [Prerequisites](#prerequisites)
* [Tech Stack](#tech-stack)
* [Getting Started](#getting-started)
* [Migrations](#migration)
* [Development](#development)
* [Database](#database-backups)

#
### Prerequisites

* <img src="readme/assets/php.svg" width="35" style="position: relative; top: 4px" /> *PHP@7.2 and up*
* <img src="readme/assets/mysql.png" width="35" style="position: relative; top: 4px" /> *MYSQL@8 and up*
* <img src="readme/assets/npm.png" width="35" style="position: relative; top: 4px" /> *npm@6 and up*
* <img src="readme/assets/composer.png" width="35" style="position: relative; top: 6px" /> *composer@2 and up*

#
## Tech Stack

- **[PHP](https://www.php.net/)**
- **[MySQL](https://www.mysql.com/)**
- **[NPM](https://www.npmjs.com/)**
- **[Composer](https://getcomposer.org/)**
- **[Laravel](https://laravel.com/)**
- **[Spatie Translatable](https://github.com/spatie/laravel-translatable)**

#
## Features

- **Models**
- **Migrations**
- **Requests**
- **Controllers**
- **Factories**
- **Seeder**
- **Lang resource of Laravel**
- **Blade components**
- **CRUD**
- **Authorization and dashboard for admin users**

#
### Getting Started
1\. First, you need to clone Movie Quotes repository from github:
```sh
git clone https://github.com/EkaAbashidze/movie-quotes-laravel.git
```

2\. Run *composer install* to install all the dependencies.
```sh
composer install
```

3\. Install NPM for JS dependencies:
```sh
npm install
```

Then, run the following command:
```sh
npm run dev
```
to build JS/SaaS resources.

4\. To set the .env file, go to the root of the project and run the following command.
```sh
cp .env.example .env
```
And now you should provide **.env** file all the necessary environment variables:

#
**MYSQL:**
>DB_CONNECTION=mysql

>DB_HOST=127.0.0.1

>DB_PORT=3306

>DB_DATABASE=*****

>DB_USERNAME=*****

>DB_PASSWORD=*****


after setting up **.env** file, execute:
```sh
php artisan config:cache
```
in order to cache environment variables.

4\. Then, in the root of the project, run the following command:
```sh
  php artisan key:generate
```
This will generate auth key.


#
### Migration
After the competion of getting started section, it's time to migrate the database. For it to be done, run:
```sh
php artisan migrate
```

#
### Development

Run Laravel's built-in development server by executing:

```sh
  php artisan serve
```

To transform JS files into executable scripts, run:

```sh
  npm run dev
```

To watch files during development, execute:

```sh
  npm run watch
```
it will watch JS files and on change it will rebuild them.


## Database

- **[DrawSQL](https://drawsql.app/)**

In the application, established relationship between the movie and quote models is that where each quote is attached to only one movie using the belongsTo relationship and the movie_id foreign key, each movie can have multiple quotes as defined by the hasMany relationship. This ensures that  consistent and organized database structure for the movies and quotes data is maintained. Utilizing DrawSQL a clear and concise visual representation of this relationship is created, making it easier  to understand and work with the data.

![relationship](https://user-images.githubusercontent.com/109977347/232478489-eed5743c-c590-4c80-a301-4027ec40d7f8.jpg)

- **[The link to the drawsql diagram](https://drawsql.app/teams/ekas-team/diagrams/movies)**
