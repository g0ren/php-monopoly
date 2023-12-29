<?php
require_once "../Classes/Dice/Dice.php";
use Classes\Dice\Dice;

$dice = new Dice();
$dice->ThrowAll();
$left0 = $_POST['left0'];
$top0 = $_POST['top0'];
$left1 = $_POST['left1'];
$top1 = $_POST['top1'];

echo <<<DICE
    <div class="die" id="die0" style="left: {$left0}px; top: {$top0}px">
        <div class="die_symbol">
            {$dice->GetSymbol(0)}
        </div>
    </div>
    <div class="die" id="die1" style="left: {$left1}px; top: {$top1}px">
        <div class="die_symbol">
            {$dice->GetSymbol(1)}
        </div>
    </div>
DICE;

