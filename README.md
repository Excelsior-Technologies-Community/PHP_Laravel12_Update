# PHP_Laravel12_Update



## Project Description

PHP_Laravel12_Update is a Laravel 12-based application that demonstrates how to implement an automatic application update system using the Laravel Updater package.

This project allows developers to update their Laravel application directly from a GitHub repository using version releases, without manually pulling code or running multiple commands.

It simplifies deployment by automating tasks like code update, database migration, cache clearing, and optimization.



## Key Features
1.  Automatic Updates from GitHub
- Fetches the latest version of the application using GitHub releases.

2.  Version Control System
- Uses semantic versioning (v1.0.0, v1.0.1) to manage updates.

3. One Command Update  
- Run `php artisan updater:update` to update the entire project.

4. Auto Migration Support
- Automatically runs database migrations after update.

5. Cache & Config Clear
- Clears cache, routes, views, and config automatically.

6. No Manual Git Required (ZIP Mode)
- Uses ZipRepository to avoid Git command dependency.




## How It Works

1. Developer pushes code to GitHub repository  
2. Creates a new release (e.g., v1.0.1)  
3. Application runs the update command  
4. System downloads latest version and replaces old files  
5. Migrations and cache clearing are executed automatically



## Technologies Used

- Framework: Laravel 12  
- Language: PHP 8+  
- Package: laravel-updater  
- Database: MySQL / SQLite  
- Version Control: Git & GitHub  
- Server: XAMPP / Localhost





---



## Installation Steps


---


## STEP 1: Create Laravel 12 Project

### Open terminal / CMD and run:

```
composer create-project laravel/laravel="12.*" PHP_Laravel12_Update

```

### Go inside project:

```
cd PHP_Laravel12_Update

```

#### Explanation:

Installs a fresh Laravel 12 application and creates a new project folder.

The cd command moves into that project directory.




## STEP 2: Database Setup (Optional)

### Update database details:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Laravel12_Update
DB_USERNAME=root
DB_PASSWORD=

```

### Create database in MySQL / phpMyAdmin:

```
Database name: Laravel12_Update

```

### Then Run:

```
php artisan migrate

```


#### Explanation:

Connects Laravel to the database and creates default tables using migrations.




## STEP 3: Install Laravel Updater Package 

### Run:

```
composer require salahhusa9/laravel-updater

```

#### Explanation:

Installs the Laravel Updater package to enable automatic updates from GitHub.




## STEP 4: Publish Config File

### Run:

```
php artisan vendor:publish --tag="updater-config"

```

### Now file created:

```
config/updater.php

```

#### Explanation:

Publishes the package configuration file so you can customize updater settings.




## STEP 5: Configure .env 

### Open .env and add:

```
GITHUB_TOKEN=your_github_token_here
GITHUB_USERNAME=your_username
GITHUB_REPOSITORY=PHP_Laravel12_Update

```

#### Explanation:

Stores GitHub credentials so Laravel can access your repository and fetch updates.




## STEP 6: Update Config File

### Open: config/updater.php

```
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Repository Source
    |--------------------------------------------------------------------------
    | Use ZipRepository to avoid Git commands.
    */
    'repository_source' => \Salahhusa9\Updater\RepositorySource\ZipRepository::class,
//  'repository_source' => \Salahhusa9\Updater\RepositorySource\GithubRepository::class,

    /*
    |--------------------------------------------------------------------------
    | GitHub Authentication (Optional)
    |--------------------------------------------------------------------------
    | Leave token null for public repositories.
    */
    'github_token' => null,
    'github_username' => 'PatelManasi',           // your GitHub username
    'github_repository' => 'PHP_Laravel12_Update',// public repo name

    /*
    |--------------------------------------------------------------------------
    | Update Options
    |--------------------------------------------------------------------------
    */
    'allow_major' => true,
    'allow_minor' => true,
    'allow_patch' => true,

    'disable_maintenance_mode' => true,

    'migrate' => true,
    'cache_clear' => true,
    'view_clear' => true,
    'config_clear' => true,
    'route_clear' => true,
    'optimize' => true,
];

```

#### Explanation:

Defines how updates are fetched from GitHub (ZIP method avoids Git command issues).




## STEP 7: Setup GitHub Repository 


### STEP 7.1: Initialize Git

```
git init
git add .
git commit -m "Initial commit"

```

#### Explanation:

Initializes Git and prepares your project for version control.



### STEP 2: Add Remote

```
git remote add origin 

https://github.com/YOUR_USERNAME/PHP_Laravel12_Update.git

```

#### Explanation:

Connects your local project to a GitHub repository.



### If error:

```
git remote remove origin
git remote add origin https://github.com/YOUR_USERNAME/PHP_Laravel12_Update.git

```

#### Explanation:

Fixes duplicate or incorrect remote repository issues.



### STEP 7.3: Push Code

```
git branch -M main
git push -u origin main

```

#### Explanation:

Uploads your project code to GitHub.



### STEP 7.4. Create First Release 

### Without release, updater WILL NOT WORK

#### Go to GitHub:

1. Open repo
2. Click Releases
3. Click Create new release

#### Add:

```
Tag: v1.0.0
Title: Version 1.0.0

```

Explanation:

Creates a version tag so the updater can detect and download updates.



## STEP 8: Test Updater

#### Now run:

```
php artisan updater:update

```

#### Explanation:

Checks GitHub for a new version and updates your project automatically.



## Expected Output:


<img src="screenshots/Screenshot 2026-03-27 110331.png" width="900">




---

## Project Folder Structure:

```
PHP_Laravel12_Update/
│── app/
│── config/
│   └── updater.php
│── routes/
│── .env
│── composer.json

```
