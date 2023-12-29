<?php

namespace Classes\Dice;

class SingleDie
{
    private null|int $value = null;
    public function getValue(): int
    {
        if($this->value===null){
            $this->ThrowDie();
        }
        return $this->value;
    }

    public function ThrowDie(): void
    {
        $this->value = random_int(1,6);
    }

}