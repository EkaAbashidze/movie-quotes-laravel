<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About Movie Quotes App

The Movie Quotes App is a web application built with the Laravel framework and utilizes a MySQL database. The app displays a random quote from a movie on the homepage, and also includes a page for each movie that displays all of the quotes associated with it.

## Technologies

- **[PHP](https://www.php.net/)**
- **[MySQL](https://www.mysql.com/)**
- **[NPM](https://www.npmjs.com/)**
- **[Composer](https://getcomposer.org/)**
- **[Laravel](https://laravel.com/)**
- **[Spatie Translatable](https://github.com/spatie/laravel-translatable)**

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

The app utilizes models to define the structure of the data and the relationships between the different tables. Migrations are used to create and modify the database schema, while requests are used to validate incoming data.

Controllers handle user requests and interact with the models to retrieve and manipulate data. Factories are used to generate fake data for testing purposes, and seeders are used to populate the database with initial data.

The app also utilizes Laravel's language resources for localization and Spatie Translatable for translating the quotes into different languages.

The back-end includes CRUD functionality for managing movies and their associated quotes. The app also includes authorization and a dashboard for admin user, who has  the ability to add, modify, edit, and delete movies.

## Database

- **[DrawSQL](https://drawsql.app/)**

In the application, established relationship between the movie and quote models is that where each quote is attached to only one movie using the belongsTo relationship and the movie_id foreign key, each movie can have multiple quotes as defined by the hasMany relationship. This ensures that  consistent and organized database structure for the movies and quotes data is maintained. Utilizing DrawSQL a clear and concise visual representation of this relationship is created, making it easier  to understand and work with the data.

![relationship](https://user-images.githubusercontent.com/109977347/232478489-eed5743c-c590-4c80-a301-4027ec40d7f8.jpg)
