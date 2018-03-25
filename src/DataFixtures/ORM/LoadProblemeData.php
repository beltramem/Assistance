<?php
namespace App\DataFixtures\ORM;

use App\Entity\Probleme;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadProblemeData extends Fixture
{
    public function load(ObjectManager $manager)
    {

		$probleme = new probleme();
		$probleme->setLibelleProb('Logiciel');
		
		$probleme2 = new probleme();
		$probleme2->setLibelleProb('Matériel');
		
		$probleme3 = new probleme();
		$probleme3->setLibelleProb('Vol');
		
		
		$manager->persist($probleme);	
		$manager->persist($probleme2);	
		$manager->persist($probleme3);	
        $manager->flush();
    }
}