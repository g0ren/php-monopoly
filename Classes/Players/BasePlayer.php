<?php

namespace classes\Players;
require_once "Classes/Players/Token.php";

class BasePlayer
{
    public Token $token;
    public int $position;
    public function __construct($token_id){
        $this->token = new Token($token_id);
        $this->position = 0;
    }


}