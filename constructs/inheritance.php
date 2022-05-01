<?php

class CoffeeMaker

{

    public function brew()

    {
        var_dump('brews coffee');

    }

}


class SpecialityCoffeeMaker extends CoffeeMaker

{

    public function brewLatte()

    {
        var_dump('brews latte');

    }
}

(new CoffeeMaker())->brew();

(new SpecialityCoffeeMaker())->brewLatte();

(new SpecialityCoffeeMaker())->brew();