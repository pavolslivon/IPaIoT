<html>

<head>
    <link rel="stylesheet" href="gg.css">

</head>

<body>
    <?php
    // define variables and set to empty values
    $username = $email = $name = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = test_input($_POST["username"]);
        $name = test_input($_POST["name"]);
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <div class="login-box">
        <h2>Login</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="user-box">
                <input type="text" name="username" required="" value="<?php echo $username; ?>">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="" required="">
                <label>Password</label>
            </div>
            <div class="user-box">
                <input type="text" name="name" required="" value="<?php echo $name; ?>">
                <label>Name</label>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $username;
    echo "<br>";
    ?>

</body>

</html>