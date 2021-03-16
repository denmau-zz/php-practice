<?php

echo "DB: PHP   Table: Users <br />";

echo "Querying Database Results <br />";

// connect to DB
$db = new mysqli(
    "localhost",
    "denmau",
    "denmau123",
    "php"
);

// Query DB
$db_results = $db->query("Select * from users");

foreach($db_results as $row) {
    printf('<li><span style="color:%s;">%s (%s)</span>
    <a href="update.php?id=%s">update</a>
    <a href="delete.php?id=%s">delete</a>
    </li> <br />',
    htmlspecialchars($row['color'], ENT_QUOTES),
    htmlspecialchars($row['name'], ENT_QUOTES),
    htmlspecialchars($row['gender'], ENT_QUOTES),
    htmlspecialchars($row['id'], ENT_QUOTES),
    htmlspecialchars($row['id'], ENT_QUOTES));
}

$db -> close();

 


