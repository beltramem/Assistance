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
		$user->setUsername('dema');
		$user->setPassword('123');
		$user->setNom('paulo');
		$user->setPrenom('jeano');
		$user->setRoles(array('ROLE_DEMANDEUR'));
		
		$user2 = new Utilisateur();
		$user2->setUsername('oper');
		$user2->setPassword('123');
		$user2->setNom('paula');
		$user2->setPrenom('jeanette');
		$user2->setRoles(array('ROLE_OPERATEUR'));
		
		$user3 = new Utilisateur();
		$user3->setUsername('resp');
		$user3->setPassword('123');
		$user3->setNom('pauli');
		$user3->setPrenom('jean');
		$user3->setRoles(array('ROLE_RESPONSABLE'));
		
		$manager->persist($user);	
		$manager->persist($user2);
		$manager->persist($user3);
        $manager->flush();
    }
}