votesmart-php
============
VERY simple api wrapper for votesmart.org.

## Install

The recommended way is [through
composer](http://getcomposer.org). Just create a `composer.json` file and
run the `php composer.phar install` command to install it:

    {
        "require": {
            "scragg0x/votesmart-php": "dev-master"
        }
    }

## API Reference

http://votesmart.org/share/api

## Example

```php
require_once __DIR__ . "/../vendor/autoload.php";

use VoteSmart\Client;

// You need to obtain a key
$key = '';

$c = new Client($key, 'json');

print_r( $c->get('Officials.getByZip', array('zip5' => 76131))->json() );
```