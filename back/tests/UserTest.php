<?php
namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {

    public function testUserCanBeCreated () {
        $user = new User();
        $user->setFirstName("Beyonce");
        $user->setLastName("Knowles");
        $user->setEmail("queenB@la.com");
        $user->setPassword("formation");
        $user->setRole("teacher");

        $this->assertEquals("Beyonce", $user->getFirstName());
    }
}