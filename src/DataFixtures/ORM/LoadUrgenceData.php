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

        $manager->flush();
    }
}