<?php
if (isset($_GET['id']) && ctype_digit($_GET['id'])) {

    $userID = $_GET['id'];

    // connect to DB
    $db = new mysqli(
        "localhost",
        "denmau",
        "denmau123",
        "php"
    );

    $sql = "SELECT * FROM users WHERE id=$userID";

    // Query DB
    $db_results = $db->query($sql);

    // expecting only 1 result
    foreach($db_results as $row) {
        printf("processing delete request for user %s",
        $row['name']);
        echo "<br />";
        echo "<br />";
    }    

    $sql = "DELETE FROM users WHERE id=$userID";

    $db->query($sql);

    echo "User has been Deleted Successfully";

    $db->close();
}