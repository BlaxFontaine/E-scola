<?php
namespace App\Tests;

use App\Entity\Teachers;
use PHPUnit\Framework\TestCase;

class TeachersTest extends TestCase {

    public function testTeacherCanBeCreated () {
        $teacher = new Teachers();
        $teacher->setFirstname("Beyonce");
        $teacher->setEmail("queenB@la.com");

        $this->assertEquals("Beyonce", $teacher->getFirstname());
    }
}