<html>

<head>
    <link rel="stylesheet" href="gg.css">

</head>

<body>
    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }
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
                <input type="text" name="name" value=" <?php echo $name; ?>">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="" required="">
                <label>Password</label>
            </div>
            <a <input type="submit" name="" value="">
            </a>
        </form>
    </div>

    <?php
    echo "<h2>Your Input:123</h2>";
    echo $name;
    echo "<br>";
    ?>

</body>

</html>