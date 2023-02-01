# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Jetbrains' Yearly versioning](https://blog.jetbrains.com/blog/2016/03/09/jetbrains-toolbox-release-and-versioning-changes/) and [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

#### Yearly versioning

Our versioning scheme follows the format:

**YYYY.C.MINOR.PATCH**

* **YYYY:** Current year
* **C:** Current development cycle
* **MINOR & PATCH:** Work as specified in [Semantic Versioning](https://semver.org/spec/v2.0.0.html)

# Development

## Model and Migration generation
This repo uses two packages to generate models and migrations automatically and a third package to generate SQL-like 
migrations.

To generate models and migrations from a database, you need to have your database setup in Laravel's Config.

* Full models generation docs:
  [Reliese Laravel Model Generator](https://github.com/reliese/laravel)

* Full migrations generation docs:
  [Laravel Migrations Generator](https://github.com/oscarafdev/migrations-generator)

* SQL-like migrations docs:
  [Laravel SQL Migrations](https://github.com/pmatseykanets/laravel-sql-migrations)

### Generating models
* You can scaffold all the models from the default connection.

```shell
php artisan code:models
```
You can scaffold a specific table like this:

```shell
php artisan code:models --table=users
```

### Generating migrations
* To create migrations for all the tables, run:
```shell
php artisan migrate:generate
```
* You can specify the tables you wish to generate using:
```shell
php artisan migrate:generate table1,table2,table3,table4,table5
```

### Create SQL-like migrations
The most convenient way of creating SQL migrations is to use `artisan make:migration` with **`--sql`** option

```shell
php artisan make:migration <name_of_migration> --sql
```

which will produce three files:

```bash
database
└── migrations
    ├── 2018_06_15_000000_<name_of_migration>.down.sql
    ├── 2018_06_15_000000_<name_of_migration>.php
    └── 2018_06_15_000000_<name_of_migration>.up.sql
```

## Contributing

Todo

## Code of Conduct

Todo

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:ericgcc@gmail.com). All security vulnerabilities will be promptly addressed.

## License

Todo
