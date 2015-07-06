# Http Statuses & Codes json
Http full status codes representation

## System requirements
- PHP 5.2.x >

## Install
First update your dependencies through composer. Add to your composer.json:
```python
"require": {
    "stanislav-web/httpstatuses-json": "1.*"
}
```
```python
php composer.phar install
```
OR
```python
php composer.phar require stanislav-web/httpstatuses-json 1.*
```
_(Do not forget to include the composer autoloader)_

```
## Usage

#### files for translation
```php
<?php

$info = (new \HttpStatuses\HttpStatuses())->getStatus(404); // 1.xx - 5.xx

// will output you full info
```

##[Issues](https://github.com/stanislav-web/httpstatuses-json/issues "Issues")
