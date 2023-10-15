<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Simple CMS Website

## Table of Contents

-   [Intro](#item1)
-   [Tech Stack](#item2)
-   [Quick Start](#item3)
-   [Screenshoot](#item4)

<a name="item1"></a>

## Intro

Hello, I am Marselinus Harson Rewo. I created this project to fulfil an assignment in the Fullstack Web Developer independent study programme with Gits.id.
The instruction in this task is to create a website that contains create, retrieve, update and delete features or better known as CRUD features.
In this project I use admin templates to speed up the process of making user interface templates.

<a name="item2"></a>

## Tech stack

The technologies I used in this website project are listed below:

-   Bootstrap
-   Ckeditor
-   Datatable
-   Filepond

<a name="item3"></a>

## Quick Start

### Clone Repository

open your terminal, go to the directory that you will install this project, then run the following command:

```bash
git clone https://github.com/marsel945/simple-cms.git

cd simple-cms
```

### Install packages

Install vendor using composer

```bash
composer update
```

Install node module using npm

```bash
npm install
```

### Configure .env

Copy .env.example file

```bash
cp .env.example .env
```

Then run the following command :

```php
php artisan key:generate
```

### Migrate Data

create an empty database with mysql 8.x version, then setup that fresh db at your .env file, then run the following command to generate all tables and seeding dummy data:

```php
php artisan migrate:fresh --seed
```

### Public Disk

To make these files accessible from the web, you should create a symbolic link from public/storage to storage/app/public.
To create the symbolic link, you may use the storage:link Artisan command:

```php
php artisan storage:link
```

### Running Application

To serve the laravel app, you need to run the following command in the project director (This will serve your app, and give you an adress with port number 8000 or etc)

-   **Note: You need run the following command into new terminal tab**

```php
php artisan serve
```

Open [http://localhost:8000](http://localhost:8000) from your browser.
To access the admin panel, hit the link [http://localhost:8000/dashboard](http://localhost:8000/dashboard)
from your browser. The application comes with default user as admin with email address `super.admin@gmail.com` and `password` and guest with email address `marselinus.system@gmail.com` and `password`.

<a name="item4"></a>

## Screenshoot

welcome page
![Welcome](https://drive.google.com/uc?export=view&id=1nfKTgStXA2la3KSRNq8gQcbYY63OEA0N)

login
![Login](https://drive.google.com/uc?export=view&id=1EK0POSYhWazlMHr8kAx7Pwgzn5mppCVS)

dashboard admin
![Dashboard](https://drive.google.com/uc?export=view&id=1Tm7Bnvv6knxiuSVAsPoM6N634DLHItbj)

all post
![All Post](https://drive.google.com/uc?export=view&id=11LJoh1s4FYJZ5ICE_0a3U9v2RWgYnyMH)

create post
![New Post](https://drive.google.com/uc?export=view&id=1shi4zig_97wgVV1cCkjhBtcMTBErZdnM)

edit post
![Edit Post](https://drive.google.com/uc?export=view&id=17oIbHItoCRvkbeGk23kzMTSa_8R8yrmD)

delete post
![Delete](https://drive.google.com/uc?export=view&id=14CIcXGtQMFOkpsk13erXfcLzLDPxp__D)

alert succes
![Image](https://drive.google.com/uc?export=view&id=1J-jqBZYrb-M8SVjS-VcRHEIyuw8YH21b)
