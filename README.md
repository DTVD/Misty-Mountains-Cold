Misty-Mountains-Cold
====================

An 1-minutes sample of using Inversion Of Control (IoC) for testing evil static methods in PHP 

Quick start
====================
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
