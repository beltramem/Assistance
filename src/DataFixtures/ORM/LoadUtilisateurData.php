<?php
namespace App\DataFixtures\ORM;

use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUtilisateurData extends Fixture
{
    public function load(ObjectManager $manager)
    {

		$user = new Utilisateur();
		$user->setUsername('admin');
		$user->setPassword('123');
		$user->setNom('paul');
		$user->setPrenom('jean');
		
		
		$manager->persist($user);	
        $manager->flush();
    }
}