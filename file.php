<html>

<head>
    <link rel="stylesheet" href="gg.css">

</head>

<body>
    <?php
    // define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="login-box">
            <h2>Login</h2>
            <form>
                <div class="user-box">
                    <input type="text" name="" required="" <?php echo $name; ?>">
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="password" name="" required="">
                    <label>Password</label>
                </div>
                <input type="submit" name="submit" value="Submit">
                </a>
            </form>
        </div>
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    ?>

</body>

</html>