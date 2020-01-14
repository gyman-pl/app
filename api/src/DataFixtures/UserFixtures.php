<?php

namespace App\DataFixtures;

use App\User\Entity\Admin;
use App\User\Entity\Instructor;
use App\User\Entity\Manager;
use App\User\Entity\Member;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture implements FixtureGroupInterface
{
    public function load(ObjectManager $manager)
    {
        $admin = new Admin();
        $this->addReference("admin", $admin);
        $manager->persist($admin);

        $managerUser = new Manager();
        $this->addReference("manager", $managerUser);
        $manager->persist($managerUser);

        $instructor = new Instructor();
        $this->addReference("instructor", $instructor);
        $manager->persist($instructor);

        $member = new Member();
        $this->addReference("member", $member);
        $manager->persist($member);

        $manager->flush();
    }

    public static function getGroups(): array
    {
        return ['default'];
    }

}
