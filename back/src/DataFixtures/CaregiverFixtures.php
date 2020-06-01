<?php

namespace App\DataFixtures;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Caregiver;

class CaregiverFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder) 
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $caregiver = new Caregiver();
        $caregiver->setFirstname('Beyonce');
        $caregiver->setLastname('Knowles');
        $caregiver->setEmail('beyonce@beyonce.com');

        $manager->persist($caregiver);

        $caregiver->setPassword($this->passwordEncoder->encodePassword(
            $caregiver,
            'the_new_password'
        ));

        $manager->flush();
    }
}
