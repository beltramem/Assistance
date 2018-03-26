<?php
namespace App\DataFixtures\ORM;

use App\Entity\Typeprobleme;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadTypeProblemeData extends Fixture
{
    public function load(ObjectManager $manager)
    {

		$typeprobleme = new Typeprobleme();
		$typeprobleme->setLibelleType('Logiciel');
		
		$typeprobleme2 = new Typeprobleme();
		$typeprobleme2->setLibelleType('Matériel');
		
		$typeprobleme3 = new Typeprobleme();
		$typeprobleme3->setLibelleType('Vol');
		
		
		$manager->persist($typeprobleme);	
		$manager->persist($typeprobleme2);	
		$manager->persist($typeprobleme3);	
        $manager->flush();
    }
}