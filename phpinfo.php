<!DOCTYPE html>
<html>
<body>


<?php 
//For print php inofrmation, it's useful when trying to find issues on local environment settings
//echo 'username : ' . `whoami`;
//phpinfo();

//$tmp_dir = ini_get('upload_tmp_dir') ? ini_get('upload_tmp_dir') : sys_get_temp_dir();
//die($tmp_dir);

?>

<h1>Upload file example</h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select a file to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload file" name="submit">
</form>

<hr>

<h1>Validate an xml against an xsd schema</h1>
<p>There is an error on name element, should be string but I set it as integer in order to visualize an error.
<br>

<?php
//Example 1: Validate xml against xsd schema

function libxml_display_error($error)
{
    $return = "<br/>\n";
    switch ($error->level) {
        case LIBXML_ERR_WARNING:
            $return .= "<b>Warning $error->code</b>: ";
            break;
        case LIBXML_ERR_ERROR:
            $return .= "<b>Error $error->code</b>: ";
            break;
        case LIBXML_ERR_FATAL:
            $return .= "<b>Fatal Error $error->code</b>: ";
            break;
    }
    $return .= trim($error->message);
    if ($error->file) {
        $return .=    " in <b>$error->file</b>";
    }
    $return .= " on line <b>$error->line</b>\n";

    return $return;
}

function libxml_display_errors() {
    $errors = libxml_get_errors();

    foreach ($errors as $error) {
        print libxml_display_error($error);
    }
    libxml_clear_errors();    
}

libxml_use_internal_errors(true);

$xml = new DOMDocument();
$xml->load('books.xml');

if (!$xml->schemaValidate('books.xsd')) {
    print '<b>DOMDocument::schemaValidate() Generated Errors!</b>';
    libxml_display_errors();
}else{
    print '<b>No errors detected</b>';
}

?>

<hr>
<h1>Example access to database</h1>
<br>
<?php
//Example 2: Access to DB
$servername = "localhost";
$username = "wad";
$password = "Wad1157590!";
$dbname = "classicmodels";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT employeeNumber,
    lastName,
    firstName,
    extension,
    email,
    officeCode,
    reportsTo,
    jobTitle
FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["employeeNumber"]. $row["lastName"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

<hr>
<h1>Example: Load and xml and print data into browser</h1>
<br>
<?php


//Example 2: Load and xml and print data into browser
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>";

$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
print_r($xml);
echo "dasdas";

echo $xml->to;
echo $xml->from;
?>

<br>
<hr>
<h1>Example: Apply an xsl transformation to an xml for rendering a html table</h1>
<br>
<?php
//Example 3: Apply an xsl transformation to an xml for rendering a html table

// Load the XML source
$xml = new DOMDocument;
$xml->load('GreatesChessPlayers.xml');

$xsl = new DOMDocument;
$xsl->load('Rule.xsl');

// Configure the transformer
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // attach the xsl rules

echo $proc->transformToXML($xml);

?> 

<hr/>

</body>
</html>