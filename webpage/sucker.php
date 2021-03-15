<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="buyagrade.css" type="text/css" rel="stylesheet"/>
    <title>Sucker</title>
</head>
<body>
<?php
if (!isset($_REQUEST["name"]) && isset($_POST["sections"]) && isset($_POST["creditCard"]) && isset($_POST["pay"])) {
    ?>
    <h1>Sorry</h1>
    <p>You didn't fill out the form completely.</p>
    <a href="buyagrade.html">Try again?</a>
<?php
} else {
    ?>
    <h1>Thanks, sucker!</h1>
    <p>Your information has been recorded</p>
    <dt>Name</dt>
    <dd>
        <?= $_POST["name"] ?>
    </dd>
    <dt>Section</dt>
    <dd>
        <?= $_POST["sections"] ?>
    </dd>
    <dt>Credit Card</dt>
    <dd>
        <?= $_POST["creditCard"] ?>( <?= $_POST["pay"] ?> )
    </dd>
    <?php
    $name = $_POST["name"];
    $section = $_POST["sections"];
    $cCard = $_POST["creditCard"];
    $payment = $_POST["pay"];
    file_put_contents("suckers.txt", $name . ";" . $section . ";" . $cCard . ";" . $payment . "\n", FILE_APPEND);
    ?>
    <pre>
    <?= file_get_contents("suckers.txt") ?>
    <?php } ?>
</pre>
</body>
</html>