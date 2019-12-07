# CISETUP

Is a codeigniter 3 framework that has been modified and added new features such as dotenv & bootstrap 4

## Installation

Use the composer to install cisetup.

```bash
composer create-project kubi/cisetup
```
## Some additional features

#### XSS Echo Filter
```php
<?php echos($foobar); ?>
```

#### Assets Url
```php
<img src="<?= asset_url() . 'img/foobar.png' ?>">
```

#### Create & Call dotenv

```dotenv
APP_TIMEZONE=Asia/Jakarta
```
```dotenv
date_default_timezone_set(getenv('APP_TIMEZONE'));
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## Thanks For
* agungjk https://github.com/agungjk/phpdotenv-for-codeigniter
* Codeigniter https://github.com/bcit-ci/CodeIgniter
* Bootstrap 4 https://github.com/twbs/bootstrap

## License
[MIT](https://choosealicense.com/licenses/mit/)
