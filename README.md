# php-clean-blog
Clean Blog from Start Bootstrap implemented with PHP.

## Quickstart

Clone the repo
```shell
$ git clone git@github.com:cfc603/php-clean-blog.git
$ cd php-clean-blog/
```

Set `DB_USER` and `DB_PASS` to your MySQL username and password
```shell
$ nano private/db_credentials.php
```

Create MySQL database and test data
```shell
$ mysql -u <username> -p < database/create.sql
Enter password: <password>
```

Run local server
```shell
$ cd public/
$ php -S localhost:8000
```

## Not Production Ready

There are several issues which should be addressed before deploying to a production environment.

1. [Need Create, Update & Delete Views](https://github.com/cfc603/php-clean-blog/issues/1)
2. [Needs authentication](https://github.com/cfc603/php-clean-blog/issues/2)
3. [Needs authenticationEscape Blog Post body](https://github.com/cfc603/php-clean-blog/issues/3)
