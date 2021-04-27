## Introduction
Packalyser is a laravel package to list your dependencies & dev dependencies in a much organized & human-readable way .

**Screenshot**
![Packalyser](https://res.cloudinary.com/hdqy5m9is/image/upload/v1619484787/img_ppszwr.png)

## installation 

1.via composer : 
```bash
composer require --dev adnane/packalyser
```
2.add the service provider:

```php
// In config/app.php 
'providers' => [
    /*
     * Package service providers
     */
    Adnane\Packalyser\PackalyserServiceProvider::class,
];
```
3.publish the view assets :
```bash 
php artisan vendor:publish --provider="Adnane\Packalyser\PackalyserServiceProvider" --tag="assets"
```
4.navigate to ```http://127.0.0.1:8000/packalyse``` . and that's it :).

## Credits
- [Adnane Kadri](https://github.com/adnane-ka)