<!DOCTYPE html>
<html lang="en">

<head>
    <title>Insert Page page</title>
</head>




<body>
<?php

// servername => localhost
// username => root
// password => empty
// database name => staff
$host = "danifascio.ddns.net";
$port = "54321";
$dbname = "Aloha";
$user = "application_user";
$password = "exp5689#";
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$conn = pg_connect($connection_string);


// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . pg_result_error());
}

// Taking all 5 values from the form data(input)
$first_name = $_REQUEST['nome'];
$last_name = $_REQUEST['cognome'];
$email = $_REQUEST['email'];

// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO anagrafica (nome,cognome,email) VALUES ('$first_name','$last_name', '$email')";

if (pg_query($conn, $sql)) {
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\n$first_name\n $last_name\n $email");
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . pg_result_error($conn);
}

// Close connection
pg_close($conn);
?>
</body>

</html>
