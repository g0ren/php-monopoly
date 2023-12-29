<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/field.css">
    <link rel="stylesheet" href="css/die.css">
    <link rel="stylesheet" href="css/buttons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="module" src="js/load.js"></script>
    <title>Monopoly</title>
</head>
<body>

<?php
require_once "Classes/Field/Field.php";
use classes\Field\Field;

$field = new Field();
$field->AddPlayer(2);
$field->AddPlayer(4);
$field->MovePlayer(0, random_int(1, 40));
$field->MovePlayer(1, random_int(1, 40));
$field->Build();
?>

<p></p>
<h1>Various tests</h1>
<p>
    let's see if we can access a cell
</p>
<?php
echo array_keys($field->cells->cells)[1];

?>
<p>
    Let's draw a player token
</p>
<div class="token">
    🚢
</div>

</body>
<footer>
    <div>Created by some random guy far away one winter day</div>
</footer>
</html>
