<?php

namespace App;

use App\Sub;

class TurkeySub extends Sub
{
    public function make()
    {
        return $this
            ->layBread()
            ->addLettuce()
            ->addTurkey()
            ->addSauces();
    }

    public function addTurkey()
    {
        var_dump('add some Turkey');

        return $this;
    }
}
