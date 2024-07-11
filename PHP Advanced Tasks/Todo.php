<?php
session_start();
$starttime = microtime(true);

$cookie_name = "user";
$cookie_value = "John Doe";
$expiry_time = time() + 5; 
$cookie_path = "/";
$domain = ""; 
$secure = false; 
$httponly = true;

setcookie($cookie_name, $cookie_value, $expiry_time, $cookie_path, $domain, $secure, $httponly);
echo "<div class='info-box'>Cookie named '$cookie_name' is set!<br></div>";

if(isset($_COOKIE[$cookie_name])) {
    echo "<div class='info-box'>Cookie value: " . $_COOKIE[$cookie_name] . "<br></div>";
}

if (empty($_SESSION['task'])) {
    $_SESSION['task'] = array();
}
$tasks = $_SESSION['task'];

if (isset($_POST['submit']) && $_POST['task'] !== "") {
    array_push($tasks, $_POST['task']);
    $_SESSION['task'] = $tasks;
}

if (empty($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter']++;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>To Do List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .info-box {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="tasks">Add to do:</label>
        <input type="text" name="task" id="tasks">
        <button type="submit" value="submit" name="submit">Add</button>
    </form>

    <form action="" method="post">
        <ul>
            <?php foreach ($tasks as $key => $value): ?>
                <li><?php echo htmlspecialchars($value); ?> 
                    <button value="<?php echo $key; ?>" type="submit" name="delete">Delete</button>
                </li>
            <?php endforeach; ?>
        </ul>
    </form>

    <?php
    if (isset($_POST['delete'])) {
        unset($_SESSION['task'][$_POST['delete']]);
        header("Refresh:0");
    }
    ?>

    <?php
    echo "Name of script: " . basename($_SERVER['PHP_SELF']) . " | Name of project: " . basename(dirname(__FILE__)) . "<br>";
    echo $_SESSION['counter'] . " times.<br>";

    if(isset($_COOKIE[$cookie_name])) {
        echo "Cookie value: " . $_COOKIE[$cookie_name] . "<br>";
    }

    setcookie($cookie_name, "", time() - 3600, $cookie_path, $domain, $secure, $httponly);
    echo "Cookie named '$cookie_name' is deleted.<br>";

    $endtime = microtime(true);
    printf("Page loaded in %f seconds", $endtime - $starttime);
    ?>

    <?php
    $counterFile = 'counter.txt';

    if (!file_exists($counterFile)) {
        file_put_contents($counterFile, 0);
    }

    $counter = file_get_contents($counterFile);
    $counter++;
    file_put_contents($counterFile, $counter);

    echo "Number of visitors: " . $counter;
    ?>
</body>
</html>
