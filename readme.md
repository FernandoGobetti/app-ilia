# Ilia Back-end developer test

## 🚀 About Me
[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/fernando-gobetti/)


Hello, I am a PHP programmer with over five years of experience. Throughout the years, I have honed my skills in PHP and gained a deep understanding of the WordPress, Laravel, and proprietary software ecosystems.

I have experience with popular PHP frameworks such as Laravel and Zend Framework, as well as another CMS for E-commerce, Magento.

In addition to PHP, I also have knowledge in HTML 5, CSS, Sass, JavaScript, jQuery, JAVA, Springboot, React JS, and React-Native.

I am also familiar with relational databases such as MySQL, MariaDB, PostgreSQL, and SQL Server.


## 1. Technologies used in this project

- Symfony 7.0.7
- Twig
- Bootstrap
- Webpack Encore
- Docker
- Nginx

## 2. Steps to run the project

Clone Repository

```bash

```

```bash

```

Builds, (re)creates, starts, and attaches to containers for a service.
```bash
docker-compose up -d
```

Open the container app
```bash
docker-compose exec app bash
```

Install project dependencies
```bash
composer install
```

```bash
npm install
```
Now you can access the project via the link
[http://localhost:8050](http://localhost:8050), has only one route to create users.

## 3. Pages 

#### Main page (list all Pokemons)

[http://localhost:8050/pokemon](http://localhost:8050/pokemon)

#### Shows a specific Pokemon by ID

[http://localhost:8050/pokemon/show/{id}](http://localhost:8050/pokemon/show/{id})

---

## 4. To run the tests

To run the tests, run the following command in app-ilia folder

If docker is not running, run this command to turn it on.

```bash
docker-compose up -d
```
This command will enter the container app

```bash
docker-compose exec app bash
```

To run the tests, just run this command

```bash
php bin/phpunit
```