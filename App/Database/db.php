<?Php
use Illuminate\Database\Capsule\Manager as Capsule;  
 
$capsule = new Capsule;
 
$capsule->addConnection(array(
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'laravel',
    'username'  => 'root',
    'password'  => '123',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
));
 
$capsule->bootEloquent();
