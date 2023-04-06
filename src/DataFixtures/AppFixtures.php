<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Projets;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i=0; $i<10; $i++) {
            //Ajouter des projets à la base de données
                    $project = new Projets();
                    $project->setTitle('projet ' . $i)
                    ->setDescription('lorem ipsum')
                    ->setImage('lorem ipsum');
                    $manager->persist($project);
                }

        $manager->flush();
    }
}
