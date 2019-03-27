<?php

namespace Tests;

use App\TurkeySub;
use App\VeggieSub;
use PHPUnit\Framework\TestCase;

class TurkeySubTest extends TestCase
{
    /** @test */
    function turkey_sub_initial_tests()
    {
        $make = (new TurkeySub)->make();
    
        dd($make);
    }

    /** @test */
    function veggie_sub_initial_tests()
    {
        $make = (new VeggieSub)->make();

        dd($make);
    }
}