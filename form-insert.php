<?php
$username = '';
$password = '';
$gender = '';
$fav_color = '';

if (isset($_POST['submit'])) {
// pass data from form into variables
    if (!isset($_POST['username']) || $_POST['username'] === '') {
        $username = $_POST['username'];
    }
    if (!isset($_POST['password']) || $_POST['password'] === '') {
        $password = $_POST['password'];
    }
    if (!isset($_POST['gender']) || $_POST['gender'] === '') {
        $gender = $_POST['gender'];
    }
    if (!isset($_POST['fav_color']) || $_POST['fav_color'] === '') {
        $fav_color = $_POST['fav_color'];
    }

// Display From Data
    printf('Hey there, here is what we got from you: <br/>
    Username : %s <br/>
    Password: %s <br/>
    Gender: %s <br/>
    Favourite Color: %s <br/>',

        htmlspecialchars($username, ENT_QUOTES),
        htmlspecialchars($password, ENT_QUOTES),
        htmlspecialchars($gender, ENT_QUOTES),
        htmlspecialchars($fav_color, ENT_QUOTES)
    );


    echo "<br />";
    echo "Saving this data into database ...";

// Connect to Database
// using experimental username (super insecure)
    $db = new mysqli(
        'localhost',
        'denmau',
        'denmau123',
        'php'
    );

    $sql = sprintf("INSERT INTO 'users' ('name', 'gender', 'color') VALUES (%s, %s ,%s)",
        // escaping user input
        $db->real_escape_string($username),
//        $username,
        $db->real_escape_string($gender),
//        $gender,
        $db->real_escape_string($fav_color)
//        $fav_color
    );
// send query to database
    $db->query($sql);
    echo "<p>User Added.</p>";
// close Database
    $db->close();
}
?>

<h2>Registration Form</h2>
<br/>

<form
        action=""
        method="post"
>

    <label for="username">Username</label>
    <input type="text" name="username" value="<?php
    echo htmlspecialchars($username, ENT_QUOTES);
    ?>">
    <br/>

    <label for="password">Password</label>
    <input type="password" name="password">
    <br/>

    <label for="gender">Gender</label>
    <input type="radio" name="gender" value="m"<?php
    if ($gender === 'm') {
        echo ' checked';
    }
    ?>>Male
    <input type="radio" name="gender" value="f"<?php
    if ($gender === 'f') {
        echo ' checked';
    }
    ?>>Female
    <input type="radio" name="gender" value="o"<?php
    if ($gender === 'o') {
        echo ' checked';
    }
    ?>>Other
    <br/>

    <label for="fav_color">Favourite Color</label>
    <select name="fav_color">
        <option value="">Select one ...</option>
        <option value="#f00"<?php
        if ($fav_color === '#f00') {
            echo ' selected';
        }
        ?>>Red
        </option>
        <option value="#0f0"<?php
        if ($fav_color === '#0f0') {
            echo ' selected';
        }
        ?>>Green
        </option>
        <option value="#00f"<?php
        if ($fav_color === '#00f') {
            echo ' selected';
        }
        ?>>Blue
        </option>
    </select>
    <br/>

    I accept the terms &amp; Conditions
    <br/>

    <input type="submit" name="submit" value="Register">
</form>
