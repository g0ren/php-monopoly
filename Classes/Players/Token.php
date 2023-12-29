<?php

namespace classes\Players;

class Token
{
    private array $symbols = [
        "ship" => '🚢',
        "car" => '🏎️',
        "hat" => '🎩',
        "dog" => '🐕',
        "cat" => '🐈',
        "penguin" => '🐧',
        "duck" => '🦆',
        "trex" => '🦖'
    ];
    public string $symbol;
    public function __construct($id){
        $this->symbol = array_values($this->symbols)[$id];
    }
}