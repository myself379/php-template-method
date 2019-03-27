<?php

namespace App;

use App\Sub;

class TurkeySub extends Sub
{
    public function addPrimaryToppings()
    {
        var_dump('add some Turkey');

        return $this;
    }
}
