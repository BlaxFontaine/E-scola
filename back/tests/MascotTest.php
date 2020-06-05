<?php
namespace App\Tests;

use App\Entity\Mascot;
use PHPUnit\Framework\TestCase;

class MascotTest extends TestCase {

    public function testMascotCanBeCreated () {
        $mascot = new Mascot();
        $mascot->setState("Happy");
        $mascot->setPhrase("Revolution is not a one time event. Audre Lorde");

        $this->assertEquals("Happy", $mascot->getState());
    }
}