<?php
$username = '';
$password = '';
$gender = '';
$fav_color = '';
$languages = array();
$comments = '';
$tc = '';

if (isset($_POST['submit'])) {
    echo "Hey there, here is what we got from you:<br>";

    // Store Form Data into corresponding variables
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    }
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    }
    if (isset($_POST['fav_color'])) {
        $fav_color = $_POST['fav_color'];
    }
    if (isset($_POST['languages'])) {
        $languages = $_POST['languages'];
    }
    if (isset($_POST['comments'])) {
        $comments = $_POST['comments'];
    }
    if (isset($_POST['tc'])) {
        $tc = $_POST['tc'];
    }

// Display From Data
    printf('Username : %s <br/>
    Password: %s <br/>
    Gender: %s <br/>
    Favourite Color: %s <br/>
    Languages: %s <br/>
    Comments: %s <br/>
    Terms &amp; Conditions: %s <br/>',
        htmlspecialchars($username, ENT_QUOTES),
        htmlspecialchars($password, ENT_QUOTES),
        htmlspecialchars($gender, ENT_QUOTES),
        htmlspecialchars($fav_color, ENT_QUOTES),
        htmlspecialchars(implode(' ', $languages), ENT_QUOTES),
        htmlspecialchars($comments, ENT_QUOTES),
        htmlspecialchars($tc, ENT_QUOTES)
    );
}
?>

<h2>Registration Form</h2>
<br/>

<form
        action=""
        method="post"
>

    <label for="username">Username</label>
    <input type="text" name="username">
    <br/>

    <label for="password">Password</label>
    <input type="password" name="password">
    <br/>

    <label for="gender">Gender</label>
    <input type="radio" name="gender" value="m">Male
    <input type="radio" name="gender" value="f">Female
    <input type="radio" name="gender" value="o">Other
    <br/>

    <label for="fav_color">Favourite Color</label>
    <select name="fav_color">
        <option value="">Select one ...</option>
        <option value="#f00">Red</option>
        <option value="#0f0">Green</option>
        <option value="#00f">Blue</option>
    </select>
    <br/>

    <label for="languages[]">Language(s) Spoken</label>
    <select name="languages[]" multiple size="3">
        <option value="en">English</option>
        <option value="fr">French</option>
        <option value="it">Italian</option>
    </select>
    <br/>

    <label for="lang_select">Check Language</label>
    <input type="checkbox" name="lang_select" value="en">English
    <input type="checkbox" name="lang_select" value="fr">French
    <input type="checkbox" name="lang_select" value="it">Italian
    <br/>

    <label for="comments">Comments</label>
    <textarea name="comments"></textarea>
    <br/>

    <input type="checkbox" name="tc" value="ok" checked>
    I accept the terms &amp; Conditions
    <br/>

    <input type="submit" name="submit" value="Register">

</form>