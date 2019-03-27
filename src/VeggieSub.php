<?php

namespace App;

use App\Sub;

class VeggieSub extends Sub
{
    public function make()
    {
        return $this
            ->layBread()
            ->addLettuce()
            ->addVeggies()
            ->addSauces();
    }

    public function addVeggies()
    {
        var_dump('add some veggies');

        return $this;
    }
    
}
