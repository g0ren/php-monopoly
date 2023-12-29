<?php

namespace Classes\Dice;
require_once "SingleDie.php";

class Dice
{
    private array $dice;
    private array $sides = ["⚀", "⚁", "⚂", "⚃", "⚄", "⚅"];

    public function __construct()
    {
        $this->dice[]=new SingleDie();
        $this->dice[]=new SingleDie();
    }

    public function ThrowAll(): void
    {
        foreach ($this->dice as $die){
            $die->ThrowDie();
        }
    }

    public function ThrowOne($n): void{
        $this->dice[$n]->ThrowDie();
    }

    public function DisplayAll(): void
    {
        foreach ($this->dice as $die){
            $val = $die->GetValue();
            echo $this->sides[$val-1];
            echo "  ";
        }
    }

    public function Display($n): void
    {
        echo $this->sides[$this->dice[$n]->GetValue() - 1];
    }

    public function GetSymbol($n): string
    {
        return $this->sides[$this->dice[$n]->GetValue() - 1];
    }
}