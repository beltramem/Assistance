<?php
namespace App\DataFixtures\ORM;

use App\Entity\Urgence;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUrgenceData extends Fixture
{
    public function load(ObjectManager $manager)
    {

		$urgence = new Urgence();
		$urgence->setLibelleUrgence('Très Urgent');
		
		$urgence2 = new Urgence();
		$urgence2->setLibelleUrgence('Moyennement Urgent');
		
		$urgence3 = new Urgence();
		$urgence3->setLibelleUrgence('Faiblement Urgent');
		
		
		$manager->persist($urgence);	
		$manager->persist($urgence2);	
		$manager->persist($urgence3);	
        $manager->flush();
    }
}