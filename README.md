# Astronomical Events - Server

Back-end for both the server and the API.

## Summary

-   [About](#about)
-   [Prerequisites](#prerequisites)
-   [Installation](#installation)

## About

If you want to server the API data yourself (because you want to own the resources, or any other reason), you can use this project to be up and running fast.

## Prerequisites

-   [PHP 7.4](https://www.php.net/downloads.php)
-   All these PHP extensions
    -   BCMath
    -   Ctype
    -   JSON
    -   Mbstring
    -   OpenSSL
    -   PDO
    -   Tokenizer
    -   XML
-   [composer](https://getcomposer.org)
-   Any of these databases
    -   MySQL 5.6+
    -   PostgreSQL 9.4+
    -   SQL Server 2017+

## Installation

1. Copy the project locally: `git clone https://github.com/astronomical-events/server astronomical-events-server`
2. Go to the project directory : `cd astronomical-events-server`
3. Install the dependencies (production mode) : `composer install --classmap-authoritative`
4. Customize your database connection information in the `.env` file
5. Install the database and its data : `php artisan migrate --seed`
6. Enable production optimizations : `php artisan route:cache && php artisan config:cache && php artisan optimize`

Assuming you serve your folder using Apache.
