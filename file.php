<html>

<head>
    <link rel="stylesheet" href="gg.css">

</head>

<body>
    <?php
    // define variables and set to empty values
    $name = $email = $subject = $date = $message = $link = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $subject = test_input($_POST["subject"]);
        $date = test_input($_POST["date"]);
        $link = test_input($_POST["url"]);
        $message = test_input($_POST["message"]);
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
        <h2>Contact Us</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="user-box">
                <input type="text" name="name" required="" value="<?php echo $name; ?>">
                <label>Name</label>
            </div>
            <div class="user-box">
                <input type="email" name="email" required="" value="<?php echo $email; ?>">
                <label>Email</label>
            </div>
            <div class="label_s">
                <label>Subject</label>
                <br>
                <select name="subject">
                    <option selected value="C#">Programovanie v jazyku C#</option>
                    <option value="HOP">Heuristické optimalizačné procesy</option>
                    <option value="Industry 4.0">Industry 4.0</option>
                    <option value="IPaIOT">Inteligentný priestor a IoT </option>
                </select>
                <br>
            </div>
            <div class="label_s">
                <div style="height: 25px; display: block;"></div>
                <label>Deadline</label>
                <div class="user-box">
                    <input type="date" name="date" required="" value="<?php echo $date; ?>">
                </div>
            </div>
            <div class="user-box">
                <input type="text" name="url" required="" value="<?php echo $link; ?>">
                <label>Link to assignment</label>
            </div>
            <div class="user-box">
                <textarea value="<?php echo $message; ?>" name="message"></textarea>
                <label>Message</label>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>

</body>
<?php
$myfile = fopen("test.txt", "w") or die("Unable to open file!");
$name = "Meno: " . $name . "\n";
$email = "Email: " . $email . "\n";
$subject = "Subject: " . $subject . "\n";
$date = "Deadline: " . $date . "\n";
$link = "Link to assignment: " . $link . "\n";
$message = "Message: " . $message . "\n";
fwrite($myfile, $name);
fwrite($myfile, $email);
fwrite($myfile, $subject);
fwrite($myfile, $date);
fwrite($myfile, $link);
fwrite($myfile, $message);
fclose($myfile);
?>

</html>