<?php
namespace App\DataFixtures\ORM;

use App\Entity\probleme;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadProblemeData extends Fixture
{
    public function load(ObjectManager $manager)
    {

		$probleme = new probleme();
		$probleme->setLibelleProb('écran cassé');
		
		$probleme2 = new probleme();
		$probleme2->setLibelleProb('clavier qui fonctionne mal');
		
		$probleme3 = new probleme();
		$probleme3->setLibelleProb('pas de souris');
		
		
		$manager->persist($probleme);	
		$manager->persist($probleme2);	
		$manager->persist($probleme3);	
        $manager->flush();
    }
}