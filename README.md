### Overview

This is an one-minutes sample of using Inversion Of Control (IoC) for testing evil static methods in PHP.

The main package is available through [Composer Packagist](https://packagist.org/packages/orakaro/ioc)
 and can be include in your own ```composer.json``` like
```json
"require": {
    "orakaro/ioc": "dev-master"
}
```

###Quick start

Assume that you have composer installed. To get things work, follow simple steps below

* Install dependencies
```bash
git clone git@github.com:DTVD/Misty-Mountains-Cold.git 
cd Misty-Mountains-Cold
composer install
```
* Generate config folder using builtin command
```bash
php vendor/bin/IoCApp gen:config
```
_The command above should print following lines to your terminal_
```bash
Create: config/facade/IoCRegister.php.
Create: config/facade/Gandalf.php.
Create: config/facade/Thorin.php.
Create: config/facade/Bilbo.php.
Create: config/facade/Thranduil.php.
Create: config/facade/Smaug.php.
Create: config/facade/Bard.php.
```

* Get classes autoloaded and run UT
```bash
composer dump-autoload
...
vendor/bin/phpunit test/TrilogyTest.php
```

###Misty-Mountains-Cold

Misty Mountains Cold in The Hobbit trilogy :)

<a href="http://www.youtube.com/watch?feature=player_embedded&v=P8ymgFyzbDo
" target="_blank"><img src="http://img.youtube.com/vi/P8ymgFyzbDo/0.jpg" 
alt="Misty-Mountains-Cold" width="480" height="360" border="10" /></a>



[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/DTVD/misty-mountains-cold/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

