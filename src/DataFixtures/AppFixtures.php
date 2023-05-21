<?php

namespace App\DataFixtures;

use App\Factory\FiliereFactory;
use App\Factory\FormateurFactory;
use App\Factory\ModuleFactory;
use App\Factory\NoteFactory;
use App\Factory\SemestreFactory;
use App\Factory\StagiaireFactory;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        FiliereFactory::createMany(5);
        //ModuleFactory::createMany(20);
        SemestreFactory::createMany(6);
        //NoteFactory::createMany(20);
        StagiaireFactory::createMany(20);
        FormateurFactory::createMany(10);
        UserFactory::createOne();

        $manager->flush();
    }
}
