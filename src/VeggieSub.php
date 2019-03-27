<?php

namespace App;

use App\Sub;

class VeggieSub extends Sub
{
    public function addPrimaryToppings()
    {
        var_dump('add some veggies');

        return $this;
    }
}
