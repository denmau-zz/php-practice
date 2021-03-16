<?php
//update.php?id=2

$username = '';
$gender = '';
$fav_color = '';

if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
    $userID = $_GET['id'];

    // Connect to DB
    $db = new mysqli(
        "localhost",
        "denmau",
        "denmau123",
        "php"
    );

    // Query details for this user
    $sql = "SELECT * FROM users WHERE id=$userID";
    $result = $db->query($sql);

    // store user details from DB in variables so that they can be prefilled in form
    // expecting only 1 result
    foreach ($result as $row) {
        $username = $row['name'];
        $gender = $row['gender'];
        $fav_color = $row['color'];
    }
    $db->close();
}

// if user edits form details then clicks update
if (isset($_POST['submit'])) {
    $userID = $_GET['id'];
    // pass data from form into variables
    if (!isset($_POST['username']) || $_POST['username'] === '') {
    } else {
        $username = $_POST['username'];
    }
    if (!isset($_POST['password']) || $_POST['password'] === '') {
    } else {
        $password = $_POST['password'];
    }
    if (!isset($_POST['gender']) || $_POST['gender'] === '') {
    } else {
        $gender = $_POST['gender'];
    }
    if (!isset($_POST['fav_color']) || $_POST['fav_color'] === '') {
    } else {
        $fav_color = $_POST['fav_color'];
    }

    // Connect to DB
    $db = new mysqli(
        "localhost",
        "denmau",
        "denmau123",
        "php"
    );

    // send update details to DB
    // UPDATE `users` SET `name`='denmau',`gender`='m',`color`='0f0' WHERE id=1
    $sql = sprintf(
        "UPDATE 'users' SET 'name'='%s', 'gender'='%s', 'color'='%s' WHERE id=%s",
        $db->real_escape_string($username),
        $db->real_escape_string($gender),
        $db->real_escape_string($fav_color),
        $db->real_escape_string($userID)
    );

    $result = $db->query($sql);

    // printf(
    //     'Hey there, here is what we got from you: <br/>
    // Username : %s <br/>
    // Gender: %s <br/>
    // Favourite Color: %s <br/>',
    //     htmlspecialchars($username, ENT_QUOTES),
    //     htmlspecialchars($gender, ENT_QUOTES),
    //     htmlspecialchars($fav_color, ENT_QUOTES)
    // );

    echo '<b>Your details have been updated successfully <br /> </b>';


    $db->close();
}
?>

<form action="" method="post">

    <label for="username">Username</label>
    <input type="text" name="username" value="<?php
                                                echo htmlspecialchars($username, ENT_QUOTES);
                                                ?>">
    <br />

    <label for="gender">Gender</label>
    <input type="radio" name="gender" value="m" <?php
                                                if ($gender === 'm') {
                                                    echo ' checked';
                                                }
                                                ?>>Male
    <input type="radio" name="gender" value="f" <?php
                                                if ($gender === 'f') {
                                                    echo ' checked';
                                                }
                                                ?>>Female
    <input type="radio" name="gender" value="o" <?php
                                                if ($gender === 'o') {
                                                    echo ' checked';
                                                }
                                                ?>>Other
    <br />

    <label for="fav_color">Favourite Color</label>
    <select name="fav_color">
        <option value="">Select one ...</option>
        <option value="#f00" <?php
                                if ($fav_color === '#f00') {
                                    echo ' selected';
                                }
                                ?>>Red
        </option>
        <option value="#0f0" <?php
                                if ($fav_color === '#0f0') {
                                    echo ' selected';
                                }
                                ?>>Green
        </option>
        <option value="#00f" <?php
                                if ($fav_color === '#00f') {
                                    echo ' selected';
                                }
                                ?>>Blue
        </option>
    </select>
    <br />

    <input type="submit" name="submit" value="Update">

</form>