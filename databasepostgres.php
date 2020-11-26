
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

$servername = "localhost";
$username = "postgres";
$password = "Mhb1157590!";
$dbname = "classicmodels";

$conn = pg_connect("host=localhost port=5432 dbname=classicmodels user=postgres password=Mhb1157590!");
if (!$conn) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($conn, "SELECT customernumber, customername
FROM public.customers");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}
while ($row = pg_fetch_row($result)) {
  echo "customernumber: $row[0] customername: $row[1]";
  echo "<br />\n";
}

?>