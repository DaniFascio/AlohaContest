<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
<?php

// servername => localhost
// username => root
// password => empty
// database name => staff
$conn = pg_connect("danifascio.ddns.net", "Aloha", "17062022", "aloha");

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
$sql = "INSERT INTO users VALUES ('$first_name','$last_name', '$email')";

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
