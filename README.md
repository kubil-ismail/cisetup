# CISETUP

Is a codeigniter 3 framework that has been modified and added new features such as dotenv & bootstrap 4

## Installation

Use the composer to install cisetup.

```bash
composer create-project kubi/cisetup
```
## Some additional features

#### XSS Echo Filter
```
<?php echos($foobar); ?>
```

#### Assets Url
```
<img src="<?= asset_url() . 'img/foobar.png' ?>">
```

#### Create & Call dotenv

```
APP_TIMEZONE=Asia/Jakarta
```
```
date_default_timezone_set(getenv('APP_TIMEZONE'));
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
