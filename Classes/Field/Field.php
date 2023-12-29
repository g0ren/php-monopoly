<?php

namespace classes\Field;

require_once "FieldCells.php";

require_once "Classes/Dice/Dice.php";
use Classes\Dice\Dice;

require_once "Classes/Players/BasePlayer.php";
use classes\Players\BasePlayer;

class Field
{
    public FieldCells $cells;
    public array $players;

    public function __construct(){
        $this->cells=new FieldCells();
    }

    public function AddPlayer($token_id){
        $this->players[] = new BasePlayer($token_id);
    }

    public function MovePlayer($id, $distance){
        $pos = $this->players[$id]->position;
        $pos += $distance;
        $pos %= count($this->cells->cells);
        $this->players[$id]->position = $pos;
    }
    private function PutPlayers(){
        foreach ($this->players as $player){
            $player_id = "player_";
            $player_id .= array_search($player, $this->players);
            $player_cell = array_keys($this->cells->cells)[$player->position];
            $top_offset = random_int(20,51);
            $left_offset = random_int(20,51);
            echo "
<style>
    #$player_id {
        grid-area: $player_cell;
        margin-top: {$top_offset}%;
        margin-left: {$left_offset}%;
        }
</style>
<div class=\"token\" id=\"$player_id\">
    {$player->token->symbol}
</div>";
        }
    }

    private function PutDice(){
        echo <<<DICE
<div id="dice">
    
</div>
DICE;


        /*
        echo <<<'DIE0'
    <div class="die" id="die0">
        <div class="die_symbol">
DIE0;
        $dice->Display(0);
        echo '</div></div>';
        echo <<<'DIE1'
    <div class="die" id="die1">
        <div class="die_symbol">
DIE1;
        $dice->Display(1);
        echo '</div></div>';
*/
    }
    public function Build(){
        echo '<div class="monopoly-board">';
        foreach ($this->cells->cells as $cell){
            echo $cell->html;
        }
        echo <<<'MARKERS'
    <div class="anchor_div" id="topleft">

    </div>
    <div class="anchor_div" id="bottomright">

    </div>
MARKERS;
        echo '</div>';
        echo '<div class="monopoly-board" id="player_board">';
        $this->PutDice();
        $this->PutPlayers();
        echo '<button id="dice_button">Throw Dice</button>';
        echo '</div>';
    }

}