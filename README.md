# MEOW POINTS
### laravel package for points system
[![Latest Version on Packagist](https://img.shields.io/packagist/v/ahmedtofaha/meow-points.svg?style=flat-square)](https://packagist.org/packages/ahmedtofaha/meow-points)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ahmedtofaha/meow-points/run-tests?label=tests)](https://github.com/ahmedtofaha/meow-points/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ahmedtofaha/meow-points/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/ahmedtofaha/meow-points/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ahmedtofaha/meow-points.svg?style=flat-square)](https://packagist.org/packages/ahmedtofaha/meow-points)
## Installation

You can install the package via composer:

```bash
composer require ahmedtofaha/meow-points
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="meow-points-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="meow-points-config"
```

This is the contents of the published config file:

```php
return [
    /*
    determine how much points equal to money amount
    @type float
    */
    'amount' => 10.0,
];
```


## Usage
### points system
```php
# use the trait in your model
class User extends Model
{
    use HasPoints;
}
# then you can use the following methods for this model
$user = new User();
$user->addPoints(100); // add 100 points to the user
$user->subPoints(100); // remove 100 points from the user
# and you can use for method after add or sub points
# to determine the points source or reason for the points change
$user->addPoints(100)->for($prize); // add 100 points to the user for the prize
$user->subPoints(100)->for($payment); // remove 100 points from the user for the payment
# you can get the points history for the user
$user->points; // return collection of points history
# you can get the points history for the user with pagination
$user->points()->paginate(10); // return collection of points history with pagination
# get the points  model has
$user->current_points; // return the points of the user
```
### balance and amount system
```php
# config/meow-points.php
return [
    /*
    determine how much points equal to money amount
    @type float
    */
    'amount' => 12.5,
];
````

```php
$user->addAmount(100); // add 100 amount of money to the user
$user->subAmount(100); // remove 100 amount of money from the user
# and you can use for method after add or sub amount
# to determine the amount money source or reason for the points change
$user->addAmount(100)->for($prize); // add 100 amount of money to the user for the prize
$user->subAmount(100)->for($payment); // remove 100 amount of money from the user for the payment
$user->current_balance; // return the balance of the model
```


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [ahmedtofaha](https://github.com/ahmedtofaha10)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
