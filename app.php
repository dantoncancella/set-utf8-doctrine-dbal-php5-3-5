/*
*
* Corrects error to set the charset of the connection in php5.3.5 or less
*
*/
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        "driver"   		=> "pdo_mysql",
        "user"				=> "user",
        "password" 			=> "pass",
        "dbname"			=> "database",
        "host"				=> "host",
        "driverOptions" 	=> array(1002 => "SET NAMES utf8 COLLATE utf8_swedish_ci")
    ),
));
