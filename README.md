# Simple Admin Panel

### Installing

Install package using Composer:

```
        composer require paulkatipunan/simple-admin-panel
```

Register the package's service provider in config/app.php:

```
        'providers' => [

            PaulKatipunan\ServiceProvider::class,

        ],

```

Run the Artisan's command:

```
   php artisan vendor:publish --provider="PaulKatipunan\ServiceProvider"

```
This will publish the dashboard blade file. And the css file for admin panel.

``



