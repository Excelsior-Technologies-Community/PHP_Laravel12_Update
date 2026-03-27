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