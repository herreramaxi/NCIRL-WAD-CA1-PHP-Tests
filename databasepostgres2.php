
<hr>
<h1>Example access to database postgres</h1>
<br>
<?php
define('DIR_VENDOR', __DIR__.'/vendor/');
if (file_exists(DIR_VENDOR . 'autoload.php')) {
  require_once(DIR_VENDOR . 'autoload.php');
}

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$s3_bucket = $_ENV['DB_USERNAME'];

echo 'Variable $s3_bucket: ' . $s3_bucket;


$host = $_ENV['DB_HOST'];
$username =  $_ENV['DB_USERNAME'];
$password =  $_ENV['DB_PASSWORD'];
$dbname = $_ENV['DB_DATABASE'];
echo $host . "<br>";
echo $username . "<br>";
echo $password . "<br>";
echo $dbname . "<br>";

$conStr = sprintf("pgsql:host=%s;dbname=%s;user=%s;password=%s",
$host,
$dbname,
$username ,
$password );

$pdo = new PDO($conStr);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

$result = $pdo->query("SELECT customernumber, customername FROM public.customers");
while ($row = $result->fetch())
{
    echo $row['customername'] . "<br>";
}


?>