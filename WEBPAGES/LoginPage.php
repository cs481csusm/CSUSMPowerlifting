<?php
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM userinfo WHERE email = '%s'", $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);

    $userinfo = $result->fetch_assoc();

    // var_dump($userinfo);
    // exit;

    if ($userinfo) {
        if (password_verify($_POST["password"], $userinfo["password_hash"])) {
            session_start();

            //session_regenerate_id();
            $_SESSION["user_id"] = $userinfo["id"];

            header("Location: AnnouncmentsPage.php");
            exit;
        }
    }

    $is_invalid = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="StylesForWebpages.css" />

</head>

<body>
    <div>
        <h1 id="login">CSUSM Powerlifting</h1>
        <img src="https://www.csusm.edu/communications/images/branding-images/spirit-logo01.jpg" alt="Cougar Logo"
            class="center">

        <?php if ($is_invalid): ?>
        <em>Invalid Login</em>
        <?php endif; ?>
        <form method="post">
            <label for="email">email</label>
            <input type="email" name="email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">

            <button>login</button>
        </form>
        <a href="SignUpPage.html">
            <button>Create Account</button>
        </a>
    </div>

</body>

</html>