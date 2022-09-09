# Static

> Announcement is a Statamic addon that creates announcements that are visible on the entire cms. New Stuff

## Features

This addon does:

- Show announcments
- Style depending on level
- Customize displayed Msg

## How to Install
Add Repository to your composer.json because Repository is private:
``` bash

"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/RBMH-Vienna/statamic-announcement.git"
        }
    ],   
```

Add github-oauth Token to config if not exist

``` bash
"config": {
        "optimize-autoloader": true,
        "preferred-install": "dist",
        "sort-packages": true,
        "github-oauth": {
            "github.com": "yourOwnPersonalAccessToken"
        }
    },
```

Install via composer:

``` bash
composer require rbmh/announcement
```

In order to use the addon, you need to publish it with the vendor command: 

``` bash
php artisan vendor:publish --provider="RBMH\Announcement\ServiceProvider"
```
