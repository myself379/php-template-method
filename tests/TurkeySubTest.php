<?php

namespace Tests;

use App\TurkeySub;
use PHPUnit\Framework\TestCase;

class TurkeySubTest extends TestCase
{
    /** @test */
    function turkey_sub_initial_tests()
    {
        $make = (new TurkeySub)->make();
    
        dd($make);
    }
}