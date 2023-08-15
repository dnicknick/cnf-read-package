#### describe
Reader Config file, e.g. `.env`

#### require

```composer
"require": {
        "php": ">=7.4"
    }
```

#### setup

```shell
composer require ndybnov-hw03/cnf-read
```

#### sample using

```php
$fileConfig = new FileConfig();
$pathToFileConfig = __DIR__;
$fileConfig->setFilePath($pathToFileConfig);
$fileConfig->setFileName($fileNameConfig = '.env');
$pathFull = $fileConfig->getFullPath();
```

```php
$readerConfig = new ReadConfig($pathFull);
$readerConfig->read();
$arrayConfig = $readerConfig->toArray();
```

```php
$storage = new Storage();
$storage->fromArray($arrayConfig);
```

```php
class ConfigKeysDTO {
    public const KEY = 'KEY';
    public const BKEY = 'BKEY';
}
```

```php
echo $storage->get(ConfigKeysDTO::KEY);
echo PHP_EOL;

echo $storage->get(ConfigKeysDTO::BKEY) ? '+' : '-';
echo PHP_EOL;
```


Enjoy and to use ))
