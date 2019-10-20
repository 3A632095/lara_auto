<?php
require '../vendor/autoload.php';
use \Demo\HelloWorld as World;
use Demo\Hello\Lara;
use Demo\Hello;
$world = new World();
$lara= new Lara();
$vincent= new Hello\Someone('Vincent');
// 以下Someone類別的使用可以不用use Demo\Hello;
$mary= new \Demo\Hello\Someone('Mary');
$john= new Demo\Hello\Someone('John');


use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('path/to/your.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');